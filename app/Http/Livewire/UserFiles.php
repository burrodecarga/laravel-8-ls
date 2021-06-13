<?php

namespace App\Http\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserFiles extends Component
{
    use WithFileUploads;

    public $archivo;
    public $resume =0;
    protected $rules = ['archivo' => 'required|mimes:pdf|max:2048'];

    public function render()
    {
        $files = auth()->user()->files;
        return view('livewire.user-files',['files'=>$files])->layout('layouts.cpp');
    }

    public function store()
    {

      $values = $this->validate($this->rules);

      $name = ($values['archivo'])->getClientOriginalName();
      $this->resume ? $valor =1: $valor=0;
      //dd($valor);
      $path =  $this->archivo->store('files', 'public');
      $ojeto = new File();
      $ojeto->name = $name;
      $ojeto->path = $path;
      $ojeto->user_id = auth()->user()->id;
      $ojeto->resume = $valor;
      $ojeto->save();

      $this->emit('alert', 'your pdf file was stored correctly');
      $this->reset();
      $this->emit('renderPdf');
    }

    public function destroy(File $file)
    {

        //dd(storage_path($file->path));
        //Storage::delete($file->path);
        Storage::disk('public')->delete($file->path);
        $file->delete();
        $this->emit('alert', 'file was deleted correctly');
      $this->reset();
    }
}
