<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleCreateRequest;
use App\Http\Requests\ScheduleDeleteRequest;
use App\Models\Schedule;

class ScheduleController extends Controller
{

    protected array $data;

    public function list()
    {

        $this->data['contacts'] = Schedule::all();
        $this->data['title'] = 'Agenda telefônica';

        return view('schedule.list', $this->data);
    }

    public function create()
    {
        $this->data['title'] = 'Cadastrar contato';

        return view('schedule.create', $this->data);
    }

    public function edit(string $id)
    {
        $this->data['title'] = 'Editar contato';
        $this->data['data'] = Schedule::find($id);

        return view('schedule.create', $this->data);
    }

    public function view(string $id)
    {
        echo 'view ' . $id;
    }

    public function save(ScheduleCreateRequest $request)
    {
        if(isset($request->id) && !empty($request->id)){
            $schedule = Schedule::find($request->id);

            if(!$schedule) return redirect()->route('schedule.list')->with('error','ID inválido');

            $schedule->fill($request->post())->save();

            return redirect()->route('schedule.list')->with('success','Contato alterado com sucesso.');
        }

        Schedule::create($request->post());

        return redirect()->route('schedule.list')->with('success','Contato cadastrado com sucesso.');
    }

    public function delete(string $id)
    {
        $schedule = Schedule::find($id);

        if(!$schedule) return redirect()->route('schedule.list')->with('error','ID inválido');

        $schedule->delete();

        return redirect()->route('schedule.list')->with('success','Contato deletado com sucesso');
    }
}
