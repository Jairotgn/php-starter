<header class="bg-secondary text-white">
    <div class="container py-5">
        <h1 class="text-center">Contact page</h1>
    </div>
</header>
<main class="container my-5">
    <form method="POST" action="./contact?sendcontact=1" class="m-auto" style="max-width:600px">
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>