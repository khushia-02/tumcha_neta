<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Filter</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        .container {
            display: flex;
        }

        .filter-sidebar {
            width: 300px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }

        .filter-sidebar h2 {
            margin-top: 0;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-section label {
            display: block;
            margin-bottom: 5px;
        }

        .filter-section input[type="text"],
        .filter-section select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .filter-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .filter-button:hover {
            background-color: #0056b3;
        }

        .results-section {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .results-section h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="filter-sidebar">
            <h2>Search Filters</h2>
            <form action="filter_results.php" method="post">
                <div class="filter-section">
                    <label for="candidate_name">Candidate Name</label>
                    <input type="text" id="candidate_name" name="candidate_name">
                </div>
                <div class="filter-section">
                    <label for="area">Area</label>
                    <input type="text" id="area" name="area">
                </div>
                <div class="filter-section">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <button type="submit" class="filter-button">Apply Filters</button>
            </form>
        </div>
        <div class="results-section">
            <h2>Filtered Candidates</h2>
            <!-- Results will be displayed here -->
        </div>
    </div>
</body>

</html>