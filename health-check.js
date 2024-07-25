const express = require('express');
const app = express();

app.get('/health-check', (req, res) => {
    const isHealthy = true; // Ваша логика проверки состояния

    if (isHealthy) {
        res.status(200).json({ status: 'healthy' });
    } else {
        res.status(500).json({ status: 'unhealthy' });
    }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Health check service running on port ${PORT}`);
});
