@extends('layouts.navigation1')
@section('title','Edit Schedule')
@section('content')
@inject('R','App\Models\General')

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Edit Horarios
            </h2>
            <?php 
            $s =$R->getSchedule($st->schedule_id);
            
            $sc =$R->getScheduleCategory($s->schedule_category_id);
          
              ?>
              <p>Horarios : <b>{{$sc->name}}</b>
              </p>
            <div
              class="grid gap-6 mb-8 md:grid-cols-2 px-4 py-3  bg-white rounded-lg shadow-md dark:bg-gray-800">
             
              <form class="form-horizontal"  method="POST" action="{{ url('schedule',$st->id) }}" >
              {{ csrf_field() }}
              @method('PUT')
              
          
         
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Primer día
                </span>
                <select name="day"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                required>
                <option value="{{$s->day}}">{{$s->day}}</option>
               <!-- <option value="domingo">domingo</option>
                  <option value="lunes">lunes</option>
                  <option value="martes">martes</option>
                  <option value="miércoles">miércoles</option>
                  <option value="jueves">jueves</option>
                  <option value="viernes">viernes</option>
                  <option value="sábado">sábado</option>-->
                  
                  
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Segundo día
                </span>
                <select name="day1"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                <option value="{{$s->day1}}">{{$s->day1}}</option>
              <!--  <option value="domingo">domingo</option>
                  <option value="lunes">lunes</option>
                  <option value="martes">martes</option>
                  <option value="miércoles">miércoles</option>
                  <option value="jueves">jueves</option>
                  <option value="viernes">viernes</option>
                  <option value="sábado">sábado</option>-->
                  
                  
                </select>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Hora de apertura</span>
                <input type="time"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Hora de apertura" name="beginTime" value="{{$st->beginTime}}"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Hora de cierre</span>
                <input type="time"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Hora de cierre" name="endTime" value="{{$st->endTime}}" 
                />
              </label>
           
              <label class="block mt-4 text-sm">
            <button
              class="flex  justify-between  px-4 py-2  text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
            Save
            
            </button>
              </label>
              
              </form>
  
              
            </div>
            

            </div>

            

              
           
@endsection 
 
