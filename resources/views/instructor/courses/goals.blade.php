<x-instructor-layout>
    <x-slot name="course">
        {{$course->slug}}
    </x-slot>

    <div>
        @livewire('instructor.course-goals',['course' => $course], key('courses-goals' . $course->id))


    </div>
    <div class="my-8">
        @livewire('instructor.course-requirements',['course' => $course], key('courses-requirements' . $course->id))
    </div>
    <div>
        @livewire('instructor.course-audiences',['course' => $course], key('courses-audiences' . $course->id))
    </div>
</x-instructor-layout>
