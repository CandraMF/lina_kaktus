<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
    </head>
    <body class="bg-light">
                
        <div class="col-md-12">
            <div class="d-flex flex-row row justify-content-center vh-100 ">
                <div class="col-md-4 bg-white align-self-center text-center p-5 shadow-md d-flex flex-column rounded-lg justify-conten-center" style="height: 300px;">
                    <h2>Login</h2>
                    <form action="{{ route('admin.login.submit') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group mb-3 mt-3 ">
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="username" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text ">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>  
                            @if ($errors->has('username'))
                                <span class="text-danger"><strong>{{ $errors->first('username') }}</strong></span>
                            @endif                      
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control " placeholder="Password">
                            <div class="input-group-append ">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>                        
                        </div> 
                        <div class="input-group mb-3 ">
                            <button type="submit"  name="submit" class="mx-auto btn btn-primary ">Submit</button>                                            
                        </div>                    
                    </form>
                </div> 
            </div>            
        </div>

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/font-awesome.js"></script>
    </body>
</html>

