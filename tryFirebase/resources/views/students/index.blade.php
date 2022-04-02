@extends('layouts.app')

@section('content')

<h4>Laravel With Firebase</h4>

<div class="container"> 
    <main class="mx-auto m-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Daftar Siswa</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Awal</th>
                                    <th>Nama Akhir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody id="StudentData">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Form Tambah Siswa --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4>Daftar Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" id="createStudentForm" autocomplete="off">

                            <div class="mb-3">
                              <label for="first_name" class="form-label">Nama Awal</label>
                              <input type="text" class="form-control" id="first_name" name = "first_name">
                            </div>

                            <div class="mb-3">
                              <label for="last_name" class="form-label">Nama Akhir</label>
                              <input type="text" class="form-control" id="last_name" name = "last_name">
                            </div>
                            
                            <div class="mb-3">
                              <label for="gender" class="form-label">Jenis Kelamin</label>
                              <select name="gender" id="gender" class="form-control">
                                  <option value="" selected disabled>--Pilih--</option>
                                  <option value="male">Laki - Laki</option>
                                  <option value="female">Perempuan</option>
                              </select>
                            </div>
                            
                            <div class="mb-3">
                              <label for="class" class="form-label">Kelas</label>
                              <select name="class" id="class" class="form-control">
                                  <option value="" selected disabled>--Pilih--</option>
                                  <option value="A">Kelas A</option>
                                  <option value="B">Kelas B</option>
                                  <option value="C">Kelas C</option>
                                  <option value="D">Kelas D</option>
                              </select>
                            </div>

                            <div class="card-footer">
                            <button class="btn btn-success btn-block" type="button" id="createStudentButton">Simpan</button> 
                            </div>

                          </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection

@push('script')
<script>
    $(document).ready(function(){
        
        // firebase Credentials Here

        // Create Student Function
 
        //  Edit Student Function

        //  Update Student Function

        // Delete Student Function
        
        // Fetch Students
        fetchStudents();

        // Create Student
        $('#createStudentButton').click(function(){
            createStudent();
        });
    });
</script>
@endpush