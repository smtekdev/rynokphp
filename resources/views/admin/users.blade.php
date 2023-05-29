

<table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
  <thead style="background-color: #2864c4; color:white !important;">
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Email</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Phone Number</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Address</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">User Type</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Password</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Profile Image</th>      
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Empty</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->name}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->email}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->phone}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->address}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->usertype}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->password}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data->avatar}}</td>
      <td style="border: 1px solid #ddd;">Empty</td>
    </tr>
    @endforeach
</tbody>
<!-- below code new added need to remove if any issue -->
</table>



