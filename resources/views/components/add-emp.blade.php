<h1 class="bg-success text-center m-auto p-3 fs-2 text-white fw-bold w-50">Add New Employee</h1>
<div class=" m-auto w-50 rounded bg-white p-5">
    
<form action="/Create" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
         
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
   
    <button type="submit" class="btn btn-primary text-primary">Add Now</button>
  </form>
  <div>