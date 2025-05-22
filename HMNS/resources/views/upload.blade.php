<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Is My Perfume</title>
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
</head>
<body>
    <div class="upload-container">
        <h2>What Is My Perfume?</h2>
        <p>upload anything you like (fruit, flower or etc)</p>

        <div id="drop-area">
            <form class="my-form">
                <p>Drag a file here or <span class="browse-link" onclick="document.getElementById('fileElem').click()">browse</span> for a file to upload.</p>
                <input type="file" name="file" id="fileElem" accept="image/*" onchange="handleFiles(this.files)">
            </form>
        </div>

        <!-- Element to display classification results -->
        <div id="classification-result"></div>
    </div>

    <!-- Define image paths using Blade's asset helper -->
    <script>
        const imagePaths = {
            applePerfume: "{{ asset('images/product-4.jpg') }}",
            cherryPerfume: "{{ asset('images/al-1.jpg') }}",
            orangePerfume: "{{ asset('images/product-2.jpg') }}",
            grapePerfume: "{{ asset('images/al-3.jpg') }}",
            strawberryPerfume: "{{ asset('images/al-4.jpg') }}",
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function handleFiles(files) {
            const formData = new FormData();
            formData.append('file', files[0]);

            $.ajax({
                url: "{{ route('upload.image') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function (data) {
                    console.log("Full Response Data:", data); // Log the entire response

                    if (data.success) {
                        alert(data.success);

                        if (data.classification && data.classification.predictions && data.classification.predictions.length > 0) {
                            const topResult = data.classification.predictions[0];
                            const classificationName = topResult.class.toLowerCase().trim();

                            console.log("Top Classification Name:", classificationName); // Log the classification name

                            const recommendations = {
                                "orange": {
                                    name: "HMNS Perfume - Alpha",
                                    image: imagePaths.orangePerfume,
                                    accords: [
                                        { name: "citrus", color: "#a0522d", width: "90%" },
                                        { name: "green", color: "#5aa85b", width: "70%" },
                                        { name: "fresh", color: "#b7edf1", width: "65%" },
                                        { name: "woody", color: "#774414", width: "60%" },
                                        { name: "aromatic", color: "#9acbc0", width: "50%" }
                                    ]
                                },
                                "apple": {
                                    name: "HMNS Perfume - Farhampton",
                                    image: imagePaths.applePerfume,
                                    accords: [
                                        { name: "amber", color: "#bc4d0f", width: "79%" },
                                        { name: "lavender", color: "#e9d2ea", width: "70%" },
                                        { name: "aromatic", color: "#91c9bb", width: "55%" },
                                        { name: "fresh spicy", color: "#bee295", width: "45%" }
                                    ]
                                },
                                "cherry": {
                                    name: "Alchemist - Pink Laundry",
                                    image: imagePaths.cherryPerfume,
                                    accords: [
                                        { name: "fruity", color: "#ffa07a", width: "88%" },
                                        { name: "sweet", color: "#ffb6c1", width: "78%" },
                                        { name: "green", color: "#98fb98", width: "68%" },
                                        { name: "powdery", color: "#e6e6fa", width: "58%" },
                                        { name: "musky", color: "#dcdcdc", width: "48%" },
                                        { name: "woody", color: "#8b4513", width: "38%" }
                                    ]
                                },
                                "strawberry": {
                                    name: "Alchemist - Onirique",
                                    image: imagePaths.strawberryPerfume,
                                    accords: [
                                        { name: "fruity", color: "#ffa07a", width: "88%" },
                                        { name: "sweet", color: "#ffb6c1", width: "78%" },
                                        { name: "green", color: "#98fb98", width: "68%" },
                                        { name: "powdery", color: "#e6e6fa", width: "58%" },
                                        { name: "musky", color: "#dcdcdc", width: "48%" },
                                        { name: "woody", color: "#8b4513", width: "38%" }
                                    ]
                                },
                            };

                            let recommendation = "No recommendation available.";
                            let recommendationDetails = null;

                            for (const key in recommendations) {
                                if (classificationName.includes(key)) {
                                    recommendationDetails = recommendations[key];
                                    recommendation = recommendationDetails.name;
                                    break;
                                }
                            }

                            console.log("Recommendation Details:", recommendationDetails); // Log the recommendation details

                            let resultHtml = `<div class="top-result-box">It's ${topResult.class}</div>`;
                            resultHtml += `<div class="recommendation-box">Recommendation: ${recommendation}</div>`;

                            if (recommendationDetails && recommendationDetails.accords) {
                                resultHtml += `
                                    <div class="detail-box">
                                        <div class="rec-image-box">
                                            <img src="${recommendationDetails.image}" alt="${recommendationDetails.name}" />
                                        </div>
                                        <div class="main-accords">
                                            <h4>Main Accords</h4>`;
                                recommendationDetails.accords.forEach(accord => {
                                    resultHtml += `<div class="accord-bar" style="background-color: ${accord.color}; width: ${accord.width};">${accord.name}</div>`;
                                });
                                resultHtml += `</div></div>`;
                            } else {
                                console.log("No recommendation details found for this classification.");
                            }

                            document.getElementById('classification-result').innerHTML = resultHtml;
                        }
                    } else if (data.error) {
                        alert(data.error);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Upload error:', xhr.responseText);
                    alert('Failed to upload image: ' + xhr.responseText);
                }
            });
        }

        document.getElementById('drop-area').addEventListener('drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
            handleFiles(e.dataTransfer.files);
        });

        document.getElementById('drop-area').addEventListener('dragover', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });
    </script>
</body>
</html>
