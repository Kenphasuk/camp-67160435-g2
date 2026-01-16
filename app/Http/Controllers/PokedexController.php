<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    /**
     * แสดงข้อมูลทั้งหมดในตาราง pokedexs
     */
    public function index()
    {
        $pokemons = Pokedex::all();
        return view('pokedex.index', compact('pokemons'));
    }

    /**
     * แสดงฟอร์มสำหรับสร้างข้อมูลใหม่
     */
    public function create()
    {
        return view('pokedex.create');
    }

    /**
     * บันทึกข้อมูลใหม่ลงในตาราง
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
            'hp' => 'required|numeric|min:0',
            'attack' => 'required|numeric|min:0',
            'defense' => 'required|numeric|min:0',
            'image_url' => 'required|url'
        ]);

        Pokedex::create($request->all());

        return redirect()->route('pokedex.index')
            ->with('success', 'Pokémon created successfully.');
    }

    /**
     * แสดงข้อมูลเฉพาะรายการ
     */
    public function show(Pokedex $pokedex)
    {
        return view('pokedex.show', compact('pokedex'));
    }

    /**
     * แสดงฟอร์มสำหรับแก้ไขข้อมูล
     */
    public function edit(Pokedex $pokedex)
    {
        return view('pokedex.edit', compact('pokedex'));
    }

    /**
     * อัพเดตข้อมูลในตาราง
     */
    public function update(Request $request, Pokedex $pokedex)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
            'hp' => 'required|numeric|min:0',
            'attack' => 'required|numeric|min:0',
            'defense' => 'required|numeric|min:0',
            'image_url' => 'required|url'
        ]);

        $pokedex->update($request->all());

        return redirect()->route('pokedex.index')
            ->with('success', 'Pokémon updated successfully.');
    }

    /**
     * ลบข้อมูลออกจากตาราง
     */
    public function destroy(Pokedex $pokedex)
    {
        $pokedex->delete();

        return redirect()->route('pokedex.index')
            ->with('success', 'Pokémon deleted successfully.');
    }
}
