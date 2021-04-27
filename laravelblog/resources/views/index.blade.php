@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto" >
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
<h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
    Do you want to be a developer?
</h1>
<a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read more</a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
<div>
    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_1280.jpg" width="700px" alt="">
</div>
<div class="m-auto sm:m-auto text-left w-4/5 block">
<h2 class="text-3xl font-extrabold text-gray-600">
    Struggling to be a better web developer?
</h2>
<p class="py-8 text-gray-500 text-s">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry
</p>
<p class="font-extrabold text-gray-600 text-s pb-9">
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
 when an unknown printer took a galley of type and scrambled it to make a type
 specimen book. It has survived not only five centuries, but also the leap into
 electronic typesetting, remaining essentially unchanged.
</p>
<a href="/blog" class="uppercade bg-blue-500 text-gray-100text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
</div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
   I'm a expert in...
    </h2>
    <span class="font-extrabold block text-4xl py-1">
   Ux Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
    Project Menagment
    </span>
    <span class="font-extrabold block text-4xl py-1">
    Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
    Backend Development
    </span>
</div>

<div class="text-center py-15">
<span class="uppercase text-s text-gray-400">
Blog
</span>
<h2 class="text-4xl font-bold py-10">
Recent Posts
</h2>
<p class="m-auto w-4/5 text-gray-500">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna 
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum.
</p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
<div class="flex bg-yellow-700 text-gray-100 pt-10">
    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
<span class="uppercase text-xs">
PHP
</span>
<h3 class="text-xl font-bold py-10">
    It was popularised in the 1960s with the release
    of Letraset sheets containing Lorem Ipsum passages,
    and more recently with desktop publishing software like 
    Aldus PageMaker including versions of Lorem Ipsum.
</h3>
<a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100text-xs font-extrabold py-3 px-5 rounded-3xl">
    Find Out More
</a>
    </div>
</div>
<div>
    <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_1280.jpg" width="700px" alt="">
</div>
</div>

@endsection