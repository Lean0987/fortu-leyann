<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Pretty Pink User Management</title>

    <style>
        /* =========================
       GOOGLE-LIKE FONT FALLBACK
    ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }


        /* =========================
       BODY
    ========================= */

        body {
            min-height: 100vh;
            padding: 40px;
            color: #6b2145;
            overflow-x: hidden;
            background:
                radial-gradient(circle at top left,
                    rgba(255, 255, 255, 0.95),
                    transparent 30%),
                linear-gradient(135deg,
                    #ffd6e7,
                    #fff0f6,
                    #fbcfe8);
        }


        /* =========================
       FLOATING DECORATIONS
    ========================= */

        body::before {
            content: "♡";
            position: fixed;
            top: 50px;
            left: 6%;
            font-size: 90px;
            color: rgba(236, 72, 153, 0.15);
            pointer-events: none;
            z-index: -1;
        }

        body::after {
            content: "🎀";
            position: fixed;
            bottom: 50px;
            right: 6%;
            font-size: 80px;
            opacity: 0.25;
            pointer-events: none;
            z-index: -1;
        }


        /* =========================
       MAIN CONTAINER
    ========================= */

        .container {
            position: relative;
            max-width: 1200px;
            margin: auto;
            padding: 35px;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.92);
            border: 2px solid #f9a8d4;
            box-shadow:
                0 25px 60px rgba(190, 24, 93, 0.16),
                0 10px 25px rgba(236, 72, 153, 0.1);
            backdrop-filter: blur(12px);
        }


        /* =========================
       CONTAINER DECORATION
    ========================= */

        .container::before {
            content: "🎀";
            position: absolute;
            top: -28px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 52px;
            filter: drop-shadow(0 5px 8px rgba(236, 72, 153, 0.2));
        }


        /* =========================
       HEADER
    ========================= */

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
            padding: 15px 5px 25px;
            border-bottom: 2px dashed #f9a8d4;
        }


        /* =========================
       TITLE
    ========================= */

        .kitty-title {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .kitty-face {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #fff0f6;
            border: 3px solid #f472b6;
            font-size: 32px;
            box-shadow:
                0 8px 18px rgba(236, 72, 153, 0.18);
        }

        .kitty-title h2 {
            color: #be185d;
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .kitty-title p {
            margin-top: 4px;
            color: #9d174d;
            font-size: 13px;
            opacity: 0.75;
        }


        /* =========================
       SEARCH
    ========================= */

        .search-box {
            position: relative;
            width: 350px;
        }

        .search-box input {
            width: 100%;
            padding: 14px 18px 14px 48px;
            border: 2px solid #f9a8d4;
            border-radius: 50px;
            outline: none;
            font-size: 14px;
            color: #831843;
            background: #fffafd;
            transition: all 0.25s ease;
        }

        .search-box input::placeholder {
            color: #db2777;
            opacity: 0.55;
        }

        .search-box input:focus {
            border-color: #ec4899;
            box-shadow:
                0 0 0 5px rgba(236, 72, 153, 0.12);
            background: white;
        }

        .search-icon {
            position: absolute;
            left: 17px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 17px;
        }


        /* =========================
       TABLE WRAPPER
    ========================= */

        .table-wrapper {
            overflow-x: auto;
            border-radius: 24px;
            border: 2px solid #fbcfe8;
            background: white;
            box-shadow:
                0 10px 30px rgba(236, 72, 153, 0.06);
        }


        /* =========================
       TABLE
    ========================= */

        table {
            width: 100%;
            min-width: 700px;
            border-collapse: collapse;
        }


        /* =========================
       TABLE HEADER
    ========================= */

        thead {
            background:
                linear-gradient(90deg,
                    #ec4899,
                    #f472b6,
                    #ec4899);
        }

        th {
            padding: 17px 18px;
            text-align: left;
            color: white;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }

        th:first-child {
            border-top-left-radius: 20px;
        }

        th:last-child {
            border-top-right-radius: 20px;
        }


        /* =========================
       TABLE BODY
    ========================= */

        td {
            padding: 17px 18px;
            font-size: 14px;
            color: #6b2145;
            border-bottom: 1px solid #fce7f3;
        }

        tbody tr {
            transition: all 0.2s ease;
        }

        tbody tr:nth-child(even) {
            background: #fff8fb;
        }

        tbody tr:hover {
            background: #fff0f6;
            transform: scale(1.002);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }


        /* =========================
       USER CELLS
    ========================= */

        .id-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 38px;
            height: 34px;
            padding: 0 11px;
            border-radius: 12px;
            background: #fce7f3;
            color: #be185d;
            font-weight: 800;
            border: 1px solid #f9a8d4;
        }

        .user-name {
            font-weight: 700;
            color: #831843;
        }

        .email-text {
            color: #9d174d;
            font-size: 13px;
        }

        .username-badge {
            display: inline-flex;
            align-items: center;
            padding: 7px 13px;
            border-radius: 30px;
            background: #fff0f6;
            color: #db2777;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid #fbcfe8;
        }


        /* =========================
       PAGINATION
    ========================= */

        .pagination {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .pagination-info {
            margin-right: auto;
            padding: 10px 16px;
            border-radius: 30px;
            background: #fff0f6;
            color: #9d174d;
            font-size: 13px;
            font-weight: 600;
            border: 1px solid #fbcfe8;
        }

        .pagination button {
            min-width: 42px;
            height: 42px;
            padding: 0 15px;
            border: 2px solid #fbcfe8;
            border-radius: 14px;
            background: white;
            color: #be185d;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            transition: all 0.2s ease;
        }

        .pagination button:hover:not(:disabled) {
            background: #fff0f6;
            border-color: #f472b6;
            transform: translateY(-2px);
        }

        .pagination button.active {
            background:
                linear-gradient(135deg,
                    #ec4899,
                    #be185d);
            color: white;
            border-color: #ec4899;
            box-shadow:
                0 7px 16px rgba(236, 72, 153, 0.25);
        }

        .pagination button:disabled {
            opacity: 0.4;
            cursor: not-allowed;
            background: #fff8fb;
        }

        #pageNumbers {
            display: flex;
            gap: 7px;
        }


        /* =========================
       RESPONSIVE
    ========================= */

        @media (max-width: 900px) {

            body {
                padding: 20px;
            }

            .container {
                padding: 25px;
            }

            .header {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                width: 100%;
            }

        }


        @media (max-width: 600px) {

            body {
                padding: 12px;
            }

            .container {
                padding: 18px;
                border-radius: 22px;
            }

            .kitty-title h2 {
                font-size: 22px;
            }

            .kitty-face {
                width: 52px;
                height: 52px;
                font-size: 27px;
            }

            .pagination {
                justify-content: center;
            }

            .pagination-info {
                width: 100%;
                margin-right: 0;
                text-align: center;
            }

        }
    </style>
    ```

</head>

<body>


    <div class="container">


        <!-- =========================
         HEADER
    ========================= -->

        <div class="header">


            <div class="kitty-title">

                <div class="kitty-face">
                    🐱
                </div>


                <div>

                    <h2>
                        Hello Kitty Users 🎀
                    </h2>

                    <p>
                        Cute and simple user management
                    </p>

                </div>

            </div>


            <!-- SEARCH -->

            <div class="search-box">

                <span class="search-icon">
                    🔍
                </span>

                <input
                    type="text"
                    id="searchInput"
                    placeholder="Search users..."
                    onkeyup="searchEmployee()">

            </div>

        </div>


        <!-- =========================
         USERS TABLE
    ========================= -->

        <div class="table-wrapper">

            <table id="employeeTable">

                <thead>

                    <tr>

                        <th>
                            ID
                        </th>

                        <th>
                            First Name
                        </th>

                        <th>
                            Last Name
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Username
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php foreach ($users as $user): ?>

                        <tr>


                            <!-- ID -->

                            <td>

                                <span class="id-badge">

                                    <?= htmlspecialchars($user['id']); ?>

                                </span>

                            </td>


                            <!-- FIRST NAME -->

                            <td>

                                <span class="user-name">

                                    <?= htmlspecialchars($user['firstname']); ?>

                                </span>

                            </td>


                            <!-- LAST NAME -->

                            <td>

                                <span class="user-name">

                                    <?= htmlspecialchars($user['lastname']); ?>

                                </span>

                            </td>


                            <!-- EMAIL -->

                            <td>

                                <span class="email-text">

                                    <?= htmlspecialchars($user['email']); ?>

                                </span>

                            </td>


                            <!-- USERNAME -->

                            <td>

                                <span class="username-badge">

                                    🎀 <?= htmlspecialchars($user['username']); ?>

                                </span>

                            </td>


                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>


        <!-- =========================
         PAGINATION
    ========================= -->

        <div class="pagination">


            <div
                class="pagination-info"
                id="paginationInfo">
            </div>


            <button
                type="button"
                id="prevPage"
                onclick="changePage(-1)">

                ♡ Previous

            </button>


            <div id="pageNumbers"></div>


            <button
                type="button"
                id="nextPage"
                onclick="changePage(1)">

                Next ♡

            </button>


        </div>

    </div>


    <!-- =========================
     SEARCH + PAGINATION SCRIPT
========================= -->

    <script>
        const rowsPerPage = 5;

        let currentPage = 1;


        /* =========================
           GET FILTERED ROWS
        ========================= */

        function getFilteredRows() {

            let input = document
                .getElementById("searchInput")
                .value
                .toLowerCase()
                .trim();


            let rows = Array.from(
                document.querySelectorAll(
                    "#employeeTable tbody tr"
                )
            );


            return rows.filter(row => {

                return row.innerText
                    .toLowerCase()
                    .includes(input);

            });

        }


        /* =========================
           DISPLAY TABLE
        ========================= */

        function displayTable() {

            let allRows = Array.from(
                document.querySelectorAll(
                    "#employeeTable tbody tr"
                )
            );


            let filteredRows =
                getFilteredRows();


            let totalPages = Math.max(
                1,
                Math.ceil(
                    filteredRows.length /
                    rowsPerPage
                )
            );


            if (currentPage > totalPages) {

                currentPage = totalPages;

            }


            /* HIDE ALL ROWS */

            allRows.forEach(row => {

                row.style.display = "none";

            });


            /* CALCULATE ROWS */

            let start =
                (currentPage - 1) *
                rowsPerPage;


            let end =
                start +
                rowsPerPage;


            /* SHOW CURRENT PAGE */

            filteredRows
                .slice(start, end)
                .forEach(row => {

                    row.style.display = "";

                });


            renderPagination(
                totalPages,
                filteredRows.length
            );

        }


        /* =========================
           RENDER PAGINATION
        ========================= */

        function renderPagination(
            totalPages,
            totalRows
        ) {

            let pageNumbers =
                document.getElementById(
                    "pageNumbers"
                );


            let paginationInfo =
                document.getElementById(
                    "paginationInfo"
                );


            let prevPage =
                document.getElementById(
                    "prevPage"
                );


            let nextPage =
                document.getElementById(
                    "nextPage"
                );


            pageNumbers.innerHTML = "";


            /* NO USERS FOUND */

            if (totalRows === 0) {

                paginationInfo.textContent =
                    "No users found";

            }


            /* USERS FOUND */
            else {

                let start =
                    (currentPage - 1) *
                    rowsPerPage + 1;


                let end =
                    Math.min(
                        currentPage *
                        rowsPerPage,
                        totalRows
                    );


                paginationInfo.textContent =
                    `Showing ${start}-${end} of ${totalRows} users`;

            }


            /* PREVIOUS BUTTON */

            prevPage.disabled =
                currentPage === 1;


            /* NEXT BUTTON */

            nextPage.disabled =
                currentPage === totalPages;


            /* PAGE NUMBERS */

            for (
                let i = 1; i <= totalPages; i++
            ) {

                let button =
                    document.createElement(
                        "button"
                    );


                button.type = "button";


                button.textContent = i;


                if (i === currentPage) {

                    button.classList.add(
                        "active"
                    );

                }


                button.onclick = function() {

                    currentPage = i;

                    displayTable();

                };


                pageNumbers.appendChild(
                    button
                );

            }

        }


        /* =========================
           CHANGE PAGE
        ========================= */

        function changePage(direction) {

            let filteredRows =
                getFilteredRows();


            let totalPages =
                Math.max(
                    1,
                    Math.ceil(
                        filteredRows.length /
                        rowsPerPage
                    )
                );


            currentPage += direction;


            if (currentPage < 1) {

                currentPage = 1;

            }


            if (currentPage > totalPages) {

                currentPage = totalPages;

            }


            displayTable();

        }


        /* =========================
           SEARCH
        ========================= */

        function searchEmployee() {

            currentPage = 1;

            displayTable();

        }


        /* =========================
           INITIAL LOAD
        ========================= */

        displayTable();
    </script>


</body>

</html>