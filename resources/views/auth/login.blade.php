@extends('layouts/app')
@section('champ')
                <h1>Identifiez-vous !</h1>
                <a>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><br></a>

                <form action="../controllers/login.php" method="post">
                 <div class="form-group">
                    <label for="login"><br></label>
                    <input type="text" name="login" id="login" class="form-control" placeholder="login" >
                    <hr>
                   </div>
                    <div class="form-group">
                      <label for="password"><br></label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="password" >
                      <hr>
                    </div>

                    <div class="row">
                        <div class="col"><br><input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Se souvenir</label>
                        </div>

                        <div class="col text-right "><br><a> MDP oublier ? <br><br></a></div>
                    </div>

                     <div class="form-group text-right">
                        <input type="submit" class="btn btn-primary " value="se connecter"  >
                     </div>
                </form>
@endsection
