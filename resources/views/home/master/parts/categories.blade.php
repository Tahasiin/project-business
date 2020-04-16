<h2>Categories</h2>
<ul class="tooplate_list">
       <span class="auto-style3">
          @foreach($categories as $data)
               <form method="GET" action="{{route('viewProducts')}}">
                <input type="hidden" name="category_name" value="{{$data->category_name}}">
               <li>
                   <button type="submit" style="background: none;outline: none;color:#1f648b;border: none;cursor: pointer">
                       {{$data->category_name}}
                   </button>
               </li>
               </form>
           @endforeach
       </span>
</ul>

<div class="cleaner_h30 horizon_divider">
</div>

