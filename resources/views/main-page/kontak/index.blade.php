@extends('main-page.layouts.kontak')
@section('content')
    <section id="contactus">
        <div class="container">
            <div class="contactAll">
                <div class="title">
                    <h2>Contact Us</h2>
                </div>
                <div class="contact-box">
                    <div class="contact form">
                        <h3>Send message to us</h3>
                        <form action="{{ route('kontak.store') }}" method="post">
                        @csrf
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="">Name</label>
                                    <input type="text" class="@error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="@error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" class="@error('subject') is-invalid @enderror" id="subject" placeholder="Pesan Kebersihan" value="{{ old('subject') }}">
                                    @error('subject')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <label for="">Message</label>
                            <textarea rows="5" name="message" id="message" class="@error('message') is-invalid @enderror" value="{{ old('message') }}"></textarea>
                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}  
                                    </div>
                                @enderror

                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                    <div class="contact info">
                        <h3>Info contact</h3>
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>2010631170078</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>081210734567</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>Pinggir masjid</td>
                            </tr>
                        </table>
                        <div class="social-icons mt-3">
                        
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15856.159236950136!2d108.15791221965829!3d-6.516645505425109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ecec00a8a886b%3A0x4ed8e094bf9d964b!2sAmis%2C%20Kec.%20Cikedung%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1652502227704!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection