@extends('layouts.navigation1')
@section('title','Ofertas')
@section('content')
<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Ofertas
            </h2>
       
            <div
              class="grid gap-6 mb-8 md:grid-cols-2 px-4 py-3  bg-white rounded-lg shadow-md dark:bg-gray-800">
            
              
              <form class="form-horizontal"  method="POST" action="{{ url('slider') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Título </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Título" name="title" 
                />
              </label>
           <!--   <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Price</span>
                <input type="number"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Price" name="price"
                />
              </label>-->

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Imagen</span>
                <input type="file"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Imagen" name="image" 
                />
                <p>1920 x 1141</p>
              </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Descripción </span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  placeholder="la descripción de la oferta" name="description" 
                ></textarea>
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
           
            <a href="{{url('slider/create')}}">
            <button
              class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
            Gestionar ofertas 
            </button>
            </a>
          
          </div>
              
            </div>
            

            </div>

            

              
           
@endsection 
 
