@extends('layouts.navigation1')
@section('title','Seleccionar horario en web')
@section('content')
@inject('R','App\Models\General')

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Seleccionar horario en web 
            </h2>
       
            <div
              class="grid gap-6 mb-8 md:grid-cols-2 px-4 py-3  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
              
              <form class="form-horizontal"  method="POST" action="{{ url('setSchedule') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Horario
                </span>
                <select name="id"
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
            <button
              class="flex  justify-between  px-4 py-2  text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
            Save
            
            </button>
              </label>
              
              </form>
              <div class="px-6 my-6">
              @if($sc)
             
             
            
            <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Category</th>
                      <th class="px-4 py-3">Status</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($sc as $v)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                        
                          <div>
                            <p class="font-semibold">{{$v->name}}</p>
                         
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      @if($v->status == 0)
                      <span
                          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                          Pending
                        </span>
                      @else
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Approved
                        </span>
                        @endif
                      </td>
        
                    </tr>
@endforeach
   </tbody>
                </table>

            @endif

             
         
          </div>
              
            </div>
            

            </div>

            

              
           
@endsection 
 
