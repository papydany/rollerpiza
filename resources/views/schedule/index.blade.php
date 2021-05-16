@extends('layouts.navigation1')
@section('title','Dashboard')
@section('content')
@inject('R','App\Models\General')

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Horarios
            </h2>
       
            <div
              class="grid gap-6 mb-8 md:grid-cols-2 px-4 py-3  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
              
              <form class="form-horizontal"  method="POST" action="{{ url('schedule') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                 Horario
                </span>
                <select name="schedule_category_id"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                required>
                <option value="">Select</option>
                @if($sc)
                @foreach($sc as $v)
                  <option value="{{$v->id}}">{{$v->name}}</option>
                  @endforeach
                  @endif
                </select>
              </label>
             
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Primer día
                </span>
                <select name="day"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                required>
                <option value="">Select</option>
                <option value="domingo">domingo</option>
                  <option value="lunes">lunes</option>
                  <option value="martes">martes</option>
                  <option value="miércoles">miércoles</option>
                  <option value="jueves">jueves</option>
                  <option value="viernes">viernes</option>
                  <option value="sábado">sábado</option>
                  
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Segundo día
                </span>
                <select name="day1"
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                <option value="">Select</option>
                <option value="domingo">domingo</option>
                  <option value="lunes">lunes</option>
                  <option value="martes">martes</option>
                  <option value="miércoles">miércoles</option>
                  <option value="jueves">jueves</option>
                  <option value="viernes">viernes</option>
                  <option value="sábado">sábado</option>
                  
                </select>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Hora de apertura</span>
                <input type="time"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Hora de apertura" name="beginTime" 
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400"> Hora de cierre</span>
                <input type="time"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Hora de cierre" name="endTime" 
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
              <div class="px-6 my-6">
              @if($sc)
              @foreach($sc as $v)
             
              <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            {{$v->name}}
            </h2>
            <?php $sd =$R->getScheduleBycategory($v->id);?>

            @if(count($sd) == 0)
            <p>No Schedule have been set </p>

            @else

            <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-4">Days</th>
                      <th class="px-6 py-6">Time</th>
                      <th class="px-2 py-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($sd as $v1)
                  <?php $time =$R->getScheduleTime($v1->id);
                  $col=count($time);?>
                    <tr class="text-gray-700 dark:text-gray-400" >
                      <td class="px-4 py-4" rowspan="{{$col}}">
                        <div class="flex items-center text-sm">
                        
                          <div>
                            <p class="font-semibold">{{$v1->day}} - {{$v1->day1}}</p>
                           
                          </div>
                        </div>
                      </td>
                      @foreach($time as $t)
                      <td class="px-4 py-4 text-sm">
                  
                      <p class="font-semibold">{{$t->beginTime}} - {{$t->endTime}}</p>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                        <form action="{{'schedule/'.$t->id.'/edit'}}" method="GET">
                       
                       {{ csrf_field() }}
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </button>
                        </form>
                          <form action="{{'schedule/'.$t->id}}" method="POST">
                       @method('DELETE')
                       {{ csrf_field() }}
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                          </form>
                        </div>
                      </td>
                      <tr>
                      @endforeach
                    </tr>

                    
@endforeach
   </tbody>
                </table>

            @endif

              @endforeach

              @endif
         
          </div>
              
            </div>
            

            </div>

            

              
           
@endsection 
 
