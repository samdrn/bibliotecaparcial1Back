<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'responsable_name' => 'required|string|max:255',
            'loan_date' => 'required|date',
            'return_date' => 'required|date|after:loan_date',
        ]);

        $loan = Loan::create($request->all());
        return response()->json($loan, 201);
        
        $book = $loan->book;
        if ($book->available_copies < 1) {
            return response()->json(['message' => 'No disponible'], 422);
        }
        
        $book->decrement('available_copies');
        return response()->json($loan, 200);
    }
}