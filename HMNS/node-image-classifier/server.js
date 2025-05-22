const axios = require("axios");
const express = require("express");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.json({ limit: "10mb" })); // Adjust the limit as needed

app.post("/classify", async (req, res) => {
    try {
        const { imageBase64 } = req.body;

        const response = await axios({
            method: "POST",
            url: "https://classify.roboflow.com/image_classification-h3hoi/1",
            params: {
                api_key: "HIFm3PCCz0AxbQeTvGKB"
            },
            data: imageBase64,
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        });

        res.json(response.data);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
