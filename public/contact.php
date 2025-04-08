 <?php 
        include('../includes/header.php');
        include('../includes/user_auto_contact_update.php');
?>
 <!-- contact us section -->
 <div class="container my-5 mt-5 pt-5">
     <div class="row">
         <!-- Contact Information Section -->
         <div class="col-md-6 contact-info">
             <h4>Contact Information</h4>
             <ul class="list-unstyled">
                 <li><strong>Email:</strong></li> <label><?php echo htmlspecialchars($Email);?></label>
                 <li><strong>Phone:</strong></li> <label><?php echo htmlspecialchars($Phone);?></label>
                 <li><strong>Address:</strong></li> <label> <?php echo htmlspecialchars($Address);?> </label>
             </ul>
         </div>
         <!-- Contact Form Section -->
         <div class="col-md-6 mt-sm-5 mt-lg-0">
             <h4>Send Us a Message</h4>
             <form>
                 <!-- Name -->
                 <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                 </div>

                 <!-- Email -->
                 <div class="mb-3">
                     <label for="email" class="form-label">Email Address</label>
                     <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                 </div>

                 <!-- Phone -->
                 <div class="mb-3">
                     <label for="phone" class="form-label">Phone Number</label>
                     <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                 </div>

                 <!-- Message -->
                 <div class="mb-3">
                     <label for="message" class="form-label">Your Message</label>
                     <textarea class="form-control" id="message" rows="10" placeholder="Write your message"
                         required></textarea>
                 </div>

                 <!-- Submit Button -->
                 <div class="text-center">
                     <button type="submit" class="btn btn-primary">Send Message</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <?php 
        include('../includes/footer.php')
     ?>