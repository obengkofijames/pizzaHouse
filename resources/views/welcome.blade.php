@extends("layouts.layout")


@section("content")
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="content">
            <img class="pizza-logo" src="/img/pl1.jpg" alt="pizza logo">
            <div class="title m-b-md see">
                the north's best pizza
                
            </div>
            <p class="mssg">{{session("mssg")}}</p>
             <a href="/pizzas/create">Order a pizza</a>
        </div>

    </div>
            
        
@endsection