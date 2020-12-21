<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourseStatus extends Component
{

    use AuthorizesRequests;
    //Definimos propiedades
    public $course,$current;


    public function mount(Course $course){
        $this->course = $course;    //course sin el $ es la propiedad definida arriba
        foreach ($course->lessons as $lesson){
            if(!$lesson->completed){
                $this->current = $lesson;
                break;
            }
        }
        if(!$this->current){
            $this->current = $course->lessons->last();
        }

        $this->authorize('enrolled',$course);

    }
    public function render()
    {
        return view('livewire.course-status');
    }

    //METODOS

    public function changeLesson(Lesson $lesson){
        $this->current = $lesson;

    }

    public function completed(){
        if($this->current->completed){
            //Eliminar registro
            $this->current->users()->detach(auth()->user()->id);
        }else{
            //Agregar Registro
            $this->current->users()->attach(auth()->user()->id);
        }

        $this->current = Lesson::find($this->current->id);
        $this->course = Course::find($this->course->id);
    }


    //PROPIEDADES COMPUTADAS

    public function getIndexProperty(){
        return $this->course->lessons->pluck('id')->search($this->current->id); //El metodo plug crea una coleccion a partir de una ya existente solo que la creara a partir del id nada mas (en este caso)
    }

    public function getPreviousProperty(){
        if($this->index == 0){
            return null;
        }else{
            return $this->course->lessons[$this->index - 1];
        }

    }

    public function getNextProperty(){
        if($this->index == $this->course->lessons->count() - 1){
            return null;
        }else{
            return $this->course->lessons[$this->index + 1];
        }

    }

    public function getAdvanceProperty(){
       $i = 0;

       foreach($this->course->lessons as $lesson){
           if($lesson->completed){
               $i++;
           }
       }
       $advance = ($i * 100)/($this->course->lessons->count());
       return round($advance, 2);

    }


}
