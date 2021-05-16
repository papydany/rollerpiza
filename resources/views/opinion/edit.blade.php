@extends('layouts.navigation1')
@section('title','Opinión')
@section('content')
@inject('R','App\Models\General')

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Opinión
            </h2>
       
            <div
              class="grid gap-6 mb-8 md:grid-cols-2 px-4 py-3  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
              
              <form class="form-horizontal"  method="POST" action="{{ url('opinion',$op->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              @method('PUT')
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input type="text"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="name" name="name" value="{{$op->name}}"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Descripción </span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="la descripción de la oferta" name="content" required
                >{{$op->content}}</textarea>
              </label>
           
              <label class="block mt-4 text-sm">
            <button
              class="flex  justify-between  px-4 py-2  text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
            Update
            </button>
              </label>
              
              </form>

            </div>
            

            </div>

            

              
           
@endsection 
 
