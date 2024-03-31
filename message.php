<div class="message-container-<?php echo $message['sender'];?>">
    <div class="message">
        <div class="message-blob-<?php echo $message['sender'];?>">
            <div class="message-content">
                <?php
                echo htmlspecialchars($message["content"]);
                ?>
            </div>
        </div>
    </div>
</div>