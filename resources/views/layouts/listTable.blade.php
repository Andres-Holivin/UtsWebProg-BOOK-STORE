<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
      </tr>
    </thead>
    <tbody>
        @if (count($book)==0)
            <tr class="bg-warning">             
                <td colspan="2">No Data</td>                  
            </tr>
        @else
            @foreach ($book as $item)              
                <tr style="cursor:pointer;" 
                onclick="window.location='/Detail/'+{{$item->id}}+''"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Book Detail">           
                    <td>{{$item->title}}</td>   
                    <td>{{$item->author}}</td>                   
                </tr>
            @endforeach
        @endif
    </tbody>
  </table>
  <script>
  $(document).ready(function($) {
    $(".table-row").click(function() {
        window.document.location = $(this).data("href");
    });
});

  </script>
