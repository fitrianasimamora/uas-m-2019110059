<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::with('account')->get();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account = Account::all();
        return view('transactions.create', compact('account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'kategori' => 'required|max:50',
            'nominal' => 'required|numeric|min:0|max:350',
            'tujuan' => 'required',
            'account_id' => 'required|min:0|max:16',
        ];

        $validated = $request->validate($rules);

        Transaction::create($validated);

        $transaction = new Transaction;

        $transaction->kategori = $request->kategori;
        $transaction->account_id = $request->account_id;

        $request->session()->flash('success', "Sukses memperbarui data transaksi dengan kategori {$validated['kategori']}");
        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction', 'account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $rules = [
            'kategori' => 'required|max:50',
            'nominal' => 'required|numeric|min:0|max:350',
            'tujuan' => 'required',
            'account_id' => 'required|min:0|max:16',
        ];

        $validated = $request->validate($rules);

        $transaction->update($validated);

        $transaction->kategori = $request->kategori;
        $transaction->account_id = $request->account_id;

        $request->session()->flash('success', "Sukses memperbarui data transaksi dengan kategori {$validated['kategori']}");
        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', "Sukses menghapus data dengan kategori {$transaction['kategori']}");
    }
}
