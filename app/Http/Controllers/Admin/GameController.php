<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MassDestroyGameRequest;
use App\Http\Requests\Admin\StoreGameRequest;
use App\Http\Requests\Admin\UpdateGameRequest;
use App\Models\Game;
use App\Models\Team;
use Gate;
use Symfony\Component\HttpFoundation\Response;

final class GameController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('game_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $games = Game::with(['team_one', 'team_two'])->get();

        return view('admin.games.index', ['games' => $games]);
    }

    public function create()
    {
        abort_if(Gate::denies('game_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team_ones = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_twos = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.games.create', ['team_ones' => $team_ones, 'team_twos' => $team_twos]);
    }

    public function store(StoreGameRequest $request)
    {
        Game::create($request->all());

        return redirect()->route('admin.games.index');
    }

    public function edit(Game $game)
    {
        abort_if(Gate::denies('game_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team_ones = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_twos = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $game->load('team_one', 'team_two');

        return view('admin.games.edit', ['game' => $game, 'team_ones' => $team_ones, 'team_twos' => $team_twos]);
    }

    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->all());

        return redirect()->route('admin.games.index');
    }

    public function show(Game $game)
    {
        abort_if(Gate::denies('game_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $game->load('team_one', 'team_two');

        return view('admin.games.show', ['game' => $game]);
    }

    public function destroy(Game $game)
    {
        abort_if(Gate::denies('game_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $game->delete();

        return back();
    }

    public function massDestroy(MassDestroyGameRequest $request)
    {
        $games = Game::find(request('ids'));

        foreach ($games as $game) {
            $game->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
