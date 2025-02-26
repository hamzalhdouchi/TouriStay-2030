<?php

namespace App\Http\Controllers;

use App\Models\properties;
use Illuminate\Http\Request;

class propertiesController extends Controller
{
    public function create(Request $request)
    {

        
            $ValidationData = $request->validate([
                'titre' => 'required|string|min:5|max:200',
                'description' => 'required|string|min:5',
                'prix_par_nuit'  => 'required|numeric|min:0',
                'caution' => 'required|numeric|min:0',
                'chambres' => 'required|integer|min:1',
                'salles_de_bain' => 'required|integer|min:1',
                'adresse' => 'required|string',
                'ville' => 'required|string|min:2|max:100',
                'code_postal' => 'required|string|min:2|max:10',
                'user_id' => 'required|integer|exists:users,id',
                'image' => 'required|image|max:2000', 
            ]);
        
        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('public/properties'); 
        }else {
                session()->flash('error', 'L image est requise!');
            };
        
            properties::create([
                'titre' => $ValidationData['titre'],
                'description' => $ValidationData['description'],
                'prix_par_nuit' => $ValidationData['prix_par_nuit'],
                'caution' => $ValidationData['caution'],
                'chambres' => $ValidationData['chambres'],
                'salles_de_bain' => $ValidationData['salles_de_bain'],
                'adresse' => $ValidationData['adresse'],  
                'ville' => $ValidationData['ville'],
                'user_id' => $ValidationData['user_id'],
                'code_postal' => $ValidationData['code_postal'],
                'image' => $imagePath,
            ]);

            session()->flash('success', 'Propriété ajoutée avec succès!');
            return back();   
        }

        public function readPropretis()
        {
            $properties = properties::All();
            
            return view('location',compact('properties'));
        }

        public function propertiesById($id)
        {
            $propertie = properties::find($id);
            
            return view('form',compact('propertie'));
        }

        public function destroy($id)
        {
            if (properties::find($id)) {
                properties::destroy($id);
                session()->flash('success', 'Destruction réussie.');
            } else {
                session()->flash('errur', 'L\'élément n\'existe pas.');
            }
            
            return back();
        }

        public function update(Request $request,$id)
        {
            $request->validate([
                'titre' => 'required|string|min:5|max:200',
                'description' => 'required|string|min:5',
                'prix_par_nuit'  => 'required|numeric|min:0',
                'caution' => 'required|numeric|min:0',
                'chambres' => 'required|integer|min:1',
                'salles_de_bain' => 'required|integer|min:1',
                'adresse' => 'required|string',
                'ville' => 'required|string|min:2|max:100',
                'code_postal' => 'required|string|min:2|max:10',
                'wifi' => 'sometimes|boolean',
                'climatisation' => 'sometimes|boolean',
                'piscine' => 'sometimes|boolean',
                'parking' => 'sometimes|boolean',
                'image' => 'required|image|max:2000', 
            ]);

            $propertie = properties::find($id);
            if (!$propertie) {
                session()->flash('error', 'User not found');
                return back();
            }

            $propertie->titre = $request->titre;
            $propertie->description = $request->description;
            $propertie->caution = $request->caution;
            $propertie->chambres = $request->chambres;
            $propertie->salles_de_bain = $request->salles_de_bain;
            $propertie->adresse = $request->adresse;
            $propertie->ville = $request->ville;
            $propertie->code_postal = $request->code_postal;
            $propertie->wifi = $request->wifi ?? 0;
            $propertie->climatisation = $request->climatisation ?? 0;
            $propertie->piscine = $request->piscine ?? 0;
            $propertie->parking = $request->parking ?? 0;
            if ($request->has('image')) {
               $imagePath = $request->file('image')->store('public','properties'); 
               $propertie->image = $imagePath;
            }
            
            $propertie->save;

            session()->flash('success', 'properties updated successfully');
            return back();
        }
        
    }
    

