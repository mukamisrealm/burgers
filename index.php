<?php
include_once("db_connect.php");
include_once("header.php");
?>
<a href="registration.php">Register</a>
<div class="container my-4">
    <h1>Home</h1>
    <img src="banner.jpg" class="img-fluid" alt="Banner">
    <p>This is a website that helps you see art pieces. Prepare to get stunned!
        Discover different types of art, build creativity.</p>
    <ul>
        <li>Explore ceramic artwork</li>
        <li>Experience life-changing poem pieces</li>
        <li>Check out afrocentric clothing designs</li>
        <li>See breathtaking jewelry pieces</li>
    </ul>

    <h2>Our Services</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Service</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT name, description, price FROM services";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['name']}</td><td>{$row['description']}</td><td>Ksh. {$row['price']}</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No services available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Service Details Form</h2>
    <form>
        <div class="mb-3">
            <label for="serviceName" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="serviceName" name="serviceName" required>
        </div>
        <div class="mb-3">
            <label for="serviceDescription" class="form-label">Service Description</label>
            <textarea class="form-control" id="serviceDescription" name="serviceDescription" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="servicePrice" class="form-label">Service Price (Ksh)</label>
            <input type="number" class="form-control" id="servicePrice" name="servicePrice" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include_once("footer.php");
?>
