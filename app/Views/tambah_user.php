<div class="container-fluid pt-16 px-16">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-10">
                        <div class="bg-secondary rounded h-200 p-4">
      <h4 class="card-title">Tambah User </h4>
      <form class="forms-sample" action="/home/aksi_user" method="POST">
        
       <div class="form-group">
          <label for="username">Username :</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

<div class="form-group">
          <label for="passwword">Password :</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="Passsword" required>
        </div>
          <div class="form-group">
          <label for="level">Level :</label>
          <input type="text" class="form-control" id="level" name="level" placeholder="Level" required>
        </div>
<!--         <div class="form-group">
          <label for="kelas">Jurusan:</label>
          
        </div>
 -->
<br>
        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  </body>
  </html>