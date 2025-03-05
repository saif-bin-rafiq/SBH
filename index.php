<?php include 'components/header.php'; ?>
<main>
    <img id="banner" src="images/Banner.png" alt="Blood Donation">
    <section>
    <h2>Welcome to Smart Blood Hub</h2>
<p>Smart Blood Hub is a non-profit organization dedicated to bridging the gap between blood donors and patients in need of life-saving blood transfusions. Our mission is to ensure that no patient has to suffer from a lack of blood during critical medical situations. We are committed to maintaining a large, diverse, and up-to-date database of registered blood donors across all blood groups, making it easier for hospitals and individuals to find the right match quickly and efficiently.</p><br>

<p>At Smart Blood Hub, we believe that every donation can make a difference. With a seamless and user-friendly platform, we connect blood donors with recipients in need, ensuring that vital blood supplies are always available. Whether you're a first-time donor or a regular contributor, you play a key role in saving lives.</p><br>

<p>Our services are designed to be accessible and responsive, making the process of finding and donating blood simpler for everyone. We send notifications to remind donors when they are eligible to donate again, ensuring a continuous supply of blood for emergency situations. Additionally, our priority system ensures that the most frequent donors are given preference when searching for blood, helping to provide quick solutions for urgent medical cases.</p><br>

<p>Smart Blood Hub also offers a point-based reward system to encourage regular donations, allowing donors to earn points for each donation made. These points can be redeemed for various benefits, creating a strong incentive for individuals to help those in need while receiving recognition for their contributions.</p><br>

<p>We are here to help you in your time of need, providing a reliable, compassionate, and efficient service for both blood donors and recipients. Join us today and become a part of this life-saving initiative.</p><br>

    </section>
    
    <form action="search.php" method="GET" class="search-box">
        <input type="text" name="location" placeholder="Enter location..." required>
        <select name="blood_group" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <input type="datetime-local" name="date_time" required>
        <button type="submit">Search</button>
    </form>
</main>
<?php include 'components/footer.php'; ?>
