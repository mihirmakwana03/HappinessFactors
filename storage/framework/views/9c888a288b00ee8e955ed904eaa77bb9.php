<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Request</title>
</head>
<body>
  <h2>New Contact Request</h2>
  <p><strong>Name:</strong> <?php echo e($data['name']); ?></p>
  <p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
  <?php if(!empty($data['subject'])): ?>
    <p><strong>Subject:</strong> <?php echo e($data['subject']); ?></p>
  <?php endif; ?>
  <p><strong>Message:</strong><br><?php echo e(nl2br(e($data['message']))); ?></p>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\happiness-factors\resources\views/emails/contact.blade.php ENDPATH**/ ?>