<h1 class="bg-success text-center m-auto p-3 fs-2 text-white fw-bold w-50">Add New Customer</h1>
<div class=" m-auto w-50 rounded bg-white p-5">
  
<form action="/Createe" method="POST">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name='name' aria-describedby="emailHelp">
         
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name='password' class="form-control" id="exampleInputPassword1">
    </div>
    
    <p class='mb-1 fw-bold fs-5'>Customer action : </p>
    <div class='mb-3 d-flex gap-2'>
         <input type="radio" id="html" name="statues" value="call">
          <label for="html">call</label><br>
          <input type="radio" id="css" name="statues" value="visit">
          <label for="css">visit</label><br>
          <input type="radio" id="javascript" name="statues" value="follow">
          <label for="javascript">follow</label>
    </div>
    <div class='mb-3 '>
    <select name='empres' class="form-select" aria-label="Default select example">
        <option selected>Add to employee</option>
        @foreach ($data as $item)
        <option value={{$item['id']}}>{{$item['name']}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary text-primary">Add Now</button>
  </form>
  <div>