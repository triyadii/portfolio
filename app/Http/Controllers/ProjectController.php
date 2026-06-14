<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display the public portfolio page.
     */
    public function landing()
    {
        $projects = Project::latest()->get();
        return view('index', compact('projects'));
    }

    /**
     * Display admin dashboard with projects list.
     */
    public function dashboard()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaProject' => 'required|string|max:200',
            'technology'  => 'required|string|max:200',
            'keterangan'  => 'required|string|max:200',
            'link'        => 'nullable|url|max:200',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'namaProject.required' => 'Nama project wajib diisi.',
            'technology.required'  => 'Teknologi wajib diisi.',
            'keterangan.required'  => 'Keterangan wajib diisi.',
            'link.url'             => 'Format link tidak valid.',
            'gambar.image'         => 'File harus berupa gambar.',
            'gambar.max'           => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('projects', 'public');
        }

        Project::create($validated);

        return redirect()->route('projects.index')
            ->with('success', 'Project berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'namaProject' => 'required|string|max:200',
            'technology'  => 'required|string|max:200',
            'keterangan'  => 'required|string|max:200',
            'link'        => 'nullable|url|max:200',
            'gambar'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'namaProject.required' => 'Nama project wajib diisi.',
            'technology.required'  => 'Teknologi wajib diisi.',
            'keterangan.required'  => 'Keterangan wajib diisi.',
            'link.url'             => 'Format link tidak valid.',
            'gambar.image'         => 'File harus berupa gambar.',
            'gambar.max'           => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($project->gambar && Storage::disk('public')->exists($project->gambar)) {
                Storage::disk('public')->delete($project->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('projects', 'public');
        }

        $project->update($validated);

        return redirect()->route('projects.index')
            ->with('success', 'Project berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Hapus gambar jika ada
        if ($project->gambar && Storage::disk('public')->exists($project->gambar)) {
            Storage::disk('public')->delete($project->gambar);
        }

        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project berhasil dihapus!');
    }
}
