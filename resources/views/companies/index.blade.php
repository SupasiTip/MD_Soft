<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.D.Soft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-10">

        <h1 class="text-center pt4 text-primary col pt-4 pb-4">Copy of SurverFrom</h1>  
            <hr>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            

            <table class="table table-bordered border-dark table-striped">
                
                <tr class="table table-primary border-dark">
                    <th>No.</th>
                    <th>Occupation</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Company Performance</th>
                    <th>Media you consume</th>
                    <th>Action</th>
                </tr>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>

                        @if($company->occupation=='Development')
                            <td class="table-info border-dark">{{ $company->occupation}}</td>
                        @elseif($company->occupation=='Student')
                            <td class="table-success border-dark">{{ $company->occupation}}</td>
                        @elseif($company->occupation=='Document')
                            <td class="table-warning border-dark">{{ $company->occupation}}</td>
                        @endif

                        <td>{{ $company->name}}</td>
                        <td>{{ $company->lastName}}</td>
                        <td>{{ $company->email}}</td>

                        @if($company->companyPerformance=='Good')
                            <td class="table-warning border-dark">{{ $company->companyPerformance}}</td>
                        @elseif($company->companyPerformance=='Fairly')
                            <td class="table-success border-dark">{{ $company->companyPerformance}}</td>
                        @elseif($company->companyPerformance=='Bad')
                            <td class="table-danger border-dark">{{ $company->companyPerformance}}</td>
                        @endif

                        <td>{{ $company->media}}</td>
                        
                        <td>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </table>
            <div class="col-md-6 pt-4">
                <a href="{{route('companies.create')}}"class = "btn btn-success"> + Create Company </a>
            </div>
            
    {!!$companies->links('pagination::bootstrap-5')!!}
    </div>
    
</body>
</html>

