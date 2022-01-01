<?php include('partials-front/menu.php')?>

    <!-- Section Starts Here -->
    <section class="order">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Order Form</legend>
                    <br>
                    <h1 class="text-center">Delivery Details</h1>
                    <br>
                    <div class="order-label">Service Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Mouse Fix" class="input-responsive" required>

                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Showrav Zaman" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0164XXXXXXX" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. pcrepairshop-online@repairshop.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="button button-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- Section Ends Here -->

    <?php include('partials-front/end.php')?>