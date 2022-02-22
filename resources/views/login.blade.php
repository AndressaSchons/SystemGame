@extends('layout')

    <form action="{{ route('create-post') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="summary">Summary</label>
        <input type="text" name="summary">
        <label for="explanation">Explanation</label>
        <input type="text" name="explanation">

        <button type="submit">Add</button>
    </form>
