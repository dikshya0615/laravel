<table border="2">
    <thead>
        <tr>
            <th>S.N</th>
            <th>product name</th>
            <th>product price</th>
            <th>product description</th>
            <th>product code</th>
            <th>product phone</th>
            <th>product image</th>
            <th>Action</th>
</tr>
</thead>
<tbody>
    @foreach($ecoms as $key=>$ecom)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$ecom->name}}</td>
        <td>{{$ecom->price}}</td>
        <td>{{$ecom->description}}</td>
        <td>{{$ecom->code}}</td>
        <td>{{$ecom->phone}}</td>
        <td><img src="{{asset('images/'.$ecom->image_filename)}}" alt=""></td>
        <td>
            <a href="/producteditgarnepage/{{$ecom->id}}">Edit</a>
            <a href="/productdeletegar/{{$ecom->id}}">Delete</a>
</td>

</tr>
@endforeach
</tbody>
</table>




                