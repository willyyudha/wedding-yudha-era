<style>
    table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

/* general styling */
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
</style>    
<table>
  <caption>Tabel Tamu</caption>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Presence</th>
      <th scope="col">Info</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
  @foreach($guest as $g)
    <tr>
      <td data-label="Account">{{$g->name}}</td>
      <td data-label="Due Date">
          @if($g->presence == 1)
             Hadir
          @else
             Tidak Hadir   
          @endif
      </td>
      <td data-label="Amount">
        <form action="{{route('delete.this.motherfucker' , ['id' => $g -> id])}}" method="post">
        <input type="hidden" name="_token" value=" {{csrf_token()}}">
        {{csrf_field()}}
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger">Kick</button>
        </form>
      </td>
      <td><a href="{{route('guest.name.linkedins', ['name' => $g->name])}}">Link</a></td>
    </tr>
  @endforeach
  </tbody>
</table>