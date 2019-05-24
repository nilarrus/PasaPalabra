<ol class="breadcrumb">
   <li>
       <i class="fa fa-home"></i>
       <a href="#" onclick="location.href = '{{ url('/adm')}}'">Administrar</a>
   </li>

   @for($i = 0; $i <= count(Request::segments()); $i++)
      <li>
         <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
            {{strtoupper(Request::segment($i-1))}}
         </a>
      </li>
   @endfor
</ol>