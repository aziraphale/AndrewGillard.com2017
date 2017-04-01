<article>
    <h2>An error occurred</h2>
    <p><?php echo $this->message ?></p>

    <?php if (isset($this->exception)): ?>
        <h3>Exception information:</h3>
        <p>
            <strong>Message:</strong> <?php echo $this->exception->getMessage() ?>
        </p>

        <h3>Stack trace:</h3>
        <pre><?php echo $this->exception->getTraceAsString() ?></pre>

        <h3>Request Parameters:</h3>
        <pre><?php echo $this->escape(var_export($this->request->getParams(), true)) ?></pre>
    <?php endif ?>
</article>
