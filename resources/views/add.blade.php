<x-master>
    @if(Session::has('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "Employee add success...!",
                icon: "success",
            });
        </script>
    @endif
    
    <h1 class="text-center">Add Employee</h1>
    <div class="col-6 mx-auto">
        <form action="/addData" method="POST">
            @csrf
            <label for="">Name:</label>
            <input type="text" name="name" id="" class="form-control my-2" placeholder="Name">
            <label for="">Gender:</label>
            <select name="gender" id="" class="form-select my-2">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label for="">Position:</label>
            <select name="position" id="" class="form-select my-2">
                <option value="Web Developer">Web Developer</option>
                <option value="Mobile Developer">Mobile Developer</option>
                <option value="Api Developer">Api Developer</option>
            </select>
            <label for="">Rank:</label>
            <select name="rank" id="" class="form-select my-2">
                <option value="Intern">Intern</option>
                <option value="Junior">Junior</option>
                <option value="Senior">Senior</option>
                <option value="Team Lead">Team Lead</option>
            </select>
            <label for="">Phone Number</label>
            <input type="text" name="phone" id="" class="form-control my-2" placeholder="Salary">
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
</x-master>