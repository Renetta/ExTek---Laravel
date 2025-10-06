@extends('layout')

@section('title', 'Contact - ExTek')
@section('description', 'Contact ExTek for inquiries, technical support, or partnerships.')

@section('content')
    <section id="contact">
        <h1>Contact Us</h1>
        <p>If you have any questions or need technical support, please reach out to us:</p>
        <ul>
            <li><strong>Address:</strong> Your Company Address Here</li>
            <li><strong>Email:</strong> info@extekme.com</li>
            <li><strong>Phone:</strong> +123 456 7890</li>
        </ul>
        <h2>Contact Form</h2>
        <form>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message"></textarea><br><br>

            <button type="submit">Send</button>
        </form>
    </section>
@endsection

