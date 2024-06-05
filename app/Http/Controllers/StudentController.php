<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //method untuk menampilkan data student
    public function index(){
        // menarik data dari database
        $students = student::all();
        

        // panggil view dan kirim data students
        return view('admin.content.student.index',[
            'students' => $students
        ]);
    }

    public function create()
    {
        $courses = Course::all();
        return view('admin.content.student.create', [
            'courses' => $courses
        ]);
           
    }


    public function store(request $request){
        // falidasi data
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id'=> 'nullable',
            
        ]);

        // simpan ke database
        student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id'=> $request->course_id,
        ]);

        // kembalikan ke halaman student
        return redirect('/admin/student')->with('massage', 'Berhasil Menambahkan Student');

    }
      // method menampilkan halaman Edit
      public function edit($id){
        // cari data student berdasarkan id
        $student = student::find($id); //Select * from student where id=$id

        return view('admin.content.student.edit', [
            'student' => $student
        ]);
    }

    // method untuk menyimpan hasil
    public function update($id, Request $request){
        // cari data student berdasarkan id
        $student = student::find($id); // SELECT * FROM students WHERE id=$id

        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required'
        ]);

        // simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);

        // retrun to index
        return redirect('/admin/student')->with('massage', 'Berhasil Memperbarui Student');
    }

    // method untuk menghapus
    public function destroy($id){
        // cari data student berdasarkan id
        $student = student::find($id); // SELECT * FROM students WHERE id=$id

        // hapus student
        $student->delete();

         // retrun to index
         return redirect('/admin/student')->with('massage', 'Berhasil Memperbarui Student');
    }
}