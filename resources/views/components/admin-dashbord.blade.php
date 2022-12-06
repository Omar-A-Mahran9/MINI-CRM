@props(['acc'])

 @if (isset($acc) && $acc === 'not')

 @else
 <div class="d-flex flex-column mb-3 gap-3">
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="m-3 p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">customers Res</th>
                    <th scope="col">action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td></td>
                        <td><button class="btn btn-primary">add new customer</button></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <a href="Create/employee" class="btn btn-info">add new Emplyee</a>
    </div>
 @endif
 
 <hr>
 <div class="m-3 p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
     <table class="table border">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Fullname</th>
                 <th scope="col"> EmployeeRes</th>
                 <th scope="col"> statues</th>
                 <th scope="col">action</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($custtomers as $item)
                 <tr>
                     <th scope="row">{{ $item['id'] }}</th>
                     <td>{{ $item['name'] }}</td>
                     <td>{{ $item['employee']->name }}</td>
                     <td class="d-flex gap-3 pb-4">
                         @if ($item['statues'] == 'call')
                             <p class="bg-secondary p-1">call</p>
                         @elseif($item['statues'] == 'visit')
                             <p class="bg-warning p-1">visit</p>
                         @else
                             <p class="bg-info p-1">follow</p>
                         @endif
                     </td>
                     <td>
                         <form action='delete/{{ $item['id'] }}' method="POST">
                             @csrf
                             @method('delete')
                             <button class="btn btn-danger">remove customer</button>
                         </form>
                     </td>
                 </tr>
             @endforeach

         </tbody>
     </table>
     <a href="/Create/customer" class="btn btn-primary">add new customer</a>
 </div>


 </div>
