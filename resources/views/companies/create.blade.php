<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.D.Soft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center alert alert-success">Copy of SurverFrom</h2>
                </div>
                <div>
                    <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group my-3">
                                <strong>Occupation*</strong>
                                <select name="occupation" id="occupation">
                                    <option value="Development">Development</option>
                                    <option value="Test">Student</option>
                                    <option value="Document">Document</option>
                                </select>
                                @error('occupation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-3">
                                <strong>Name*</strong>
                                <input type="text" name="name" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-3">
                                <strong>Last Name*</strong>
                                <input type="text" name="lastName" class="form-control">
                                @error('lastName')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-3">
                                <strong>Email</strong>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <hr>
                            <div>
                                <strong>Company Performance</strong>
                            </div>
                            <div>
                                <input type="radio" name="companyPerformance" <?php 
                                if (isset($gender) && $gender == "Good") echo "checked"; ?> 
                                value="Good"> Good
                            </div>
                            <div>
                                <input type="radio" name="companyPerformance" <?php 
                                if (isset($gender) && $gender == "Fairly") echo "checked"; ?> 
                                value="Fairly"> Fairly
                            </div>
                            <div>
                                <input type="radio" name="companyPerformance" <?php 
                                if (isset($gender) && $gender == "Bad") echo "checked"; ?> 
                                value="Bad"> Bad
                            </div>
                            <hr>

                            <div>
                                <strong>Media you consume</strong>
                            </div>
                            <div>
                                <input type="checkbox" name="media" value="Television">Television<br>
                                <input type="checkbox" name="media" value="Radio">Radio<br>
                                <input type="checkbox" name="media" value="Newspaper">Newspaper<br>
                                <input type="checkbox" name="media" value="Magazines/Books">Magazines/Books<br>
                                <input type="checkbox" name="media" value="Internet/Websites">Internet/Websites<br>
                                <input type="checkbox" name="media" value="Facebook">Facebook<br>
                                <input type="checkbox" name="media" value="Twitter">Twitter<br>
                            </div>
                            <div class="row">
                                <strong>Other</strong>
                            </div>
                            <div>
                                <textarea type="text" name="media" cols="20" rows="3"></textarea>
                            </div>

                        <div class="col-md-12">
                            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <a href="{{ route('companies.create') }}"></a>
                    <button class="mt-3 btn btn-danger" id="clear" value="clear">Clear</button>
                </form>
            </div>
        </div>
    
</body>
</html>