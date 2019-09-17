@extends('admin.base.base')

@section('content')
<section class="login">
<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center pt-5 mb-5">
         <div class="col-4 text-center mt-5">
            <h3 class="logo"> <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAtMTIgNTEyLjAwMDAzIDUxMiIgd2lkdGg9IjUxMnB4Ij48bGluZWFyR3JhZGllbnQgaWQ9ImEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoLjk0Mjg4MyAuMzQ0NzQ3IC0uMzQ0NzQ3IC45NDI4ODMgMTU1Ljc5NDI3MSAtMjM0LjMwMTk2MSkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjAzLjc5MTgiIHgyPSIzNTAuMTMzNiIgeTE9IjUzNS45ODU1IiB5Mj0iNzA5LjM0NDEiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2FjYzEzMCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzk3YTAzYiIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJiIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiM5N2EwM2IiIHN0b3Atb3BhY2l0eT0iMCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzU3NWM1NSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJjIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC45NDI4ODMgLjM0NDc0NyAtLjM0NDc0NyAuOTQyODgzIDE1NS43OTQyNzEgLTIzNC4zMDE5NjEpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjI5My4xMjgyIiB4Mj0iMTU5LjE2OTQiIHhsaW5rOmhyZWY9IiNiIiB5MT0iNjIyLjAzNDciIHkyPSI1MDIuNzA5OCIvPjxsaW5lYXJHcmFkaWVudCBpZD0iZCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCguOTQyODgzIC4zNDQ3NDcgLS4zNDQ3NDcgLjk0Mjg4MyAxNTUuNzk0MjcxIC0yMzQuMzAxOTYxKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxNzMuNzE2NCIgeDI9IjIwOC42MTM0IiB5MT0iNTQyLjYzNzkiIHkyPSI1ODcuNjY2MiI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjOTdhMDNiIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjNmM3ZDQ3Ii8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9ImUiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjk1LjcyMTI4Nzg1MiIgeDI9IjIzMS4xMDk3NzE0NjE4IiB4bGluazpocmVmPSIjYiIgeTE9IjM3Ny4zNjYzMzQ1ODk2IiB5Mj0iMjk4LjAxODc0OTEyMjQiLz48bGluZWFyR3JhZGllbnQgaWQ9ImYiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoLS4xODAxMDQgLS45ODc2NTggLjk4NzY1OCAtLjE4MDEwNCA3NzIuMDk3NDA1IDExMTIuNDI1NDkzKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI4NTQuNTU4NCIgeDI9IjEwMDAuODk4NyIgeTE9Ii0yNzkuNDc5NyIgeTI9Ii0xMDYuMTIyOCI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmY0YjNlIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjOTcyZTA3Ii8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9ImciPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzk3MmUwNyIgc3RvcC1vcGFjaXR5PSIwIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjNTgyNzA3Ii8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9ImgiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoLS4xODAxMDQgLS45ODc2NTggLjk4NzY1OCAtLjE4MDEwNCA3NzIuMDk3NDA1IDExMTIuNDI1NDkzKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI5NDMuODkzNiIgeDI9IjgwOS45MzE5IiB4bGluazpocmVmPSIjZyIgeTE9Ii0xOTMuNDMxOCIgeTI9Ii0zMTIuNzU5MiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iaSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgtLjE4MDEwNCAtLjk4NzY1OCAuOTg3NjU4IC0uMTgwMTA0IDc3Mi4wOTc0MDUgMTExMi40MjU0OTMpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjgyNC40ODM3IiB4Mj0iODU5LjM3OTgiIHkxPSItMjcyLjgyNzIiIHkyPSItMjI3Ljc5OTkiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzk3MmUwNyIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzU4MjcwNyIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJqIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjM2NS40ODMxMjQ4ODY2IiB4Mj0iMjUwLjk5NjA2MDc5MSIgeGxpbms6aHJlZj0iI2ciIHkxPSIzMDMuMjkyMzUxMzg4NCIgeTI9IjI1NS42ODM3NTk5NTEyIi8+PGxpbmVhckdyYWRpZW50IGlkPSJrIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC45MDAxMTYgLS40NDQ2MzcgLjQ0NDYzNyAuOTAwMTE2IC01NS43NzM4NjcgNDI4Ljg4MjgwNCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMzUwLjk5NjgiIHgyPSI0OTcuMzM1OSIgeTE9Ii0xMjMuOTUwOCIgeTI9IjQ5LjQwNDYiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2ZmZTU0OCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2ZmYjIxMSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJsIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KC45MDAxMTYgLS40NDQ2MzcgLjQ0NDYzNyAuOTAwMTE2IC01NS43NzM4NjcgNDI4Ljg4MjgwNCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNDQwLjMzMiIgeDI9IjMwNi4zNzk3IiB5MT0iLTM3LjkwMjkiIHkyPSItMTU3LjIyMiI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZiMjExIiBzdG9wLW9wYWNpdHk9IjAiLz48c3RvcCBvZmZzZXQ9Ii4yMTQiIHN0b3AtY29sb3I9IiNmZjk1MWQiIHN0b3Atb3BhY2l0eT0iLjIxNTY4NiIvPjxzdG9wIG9mZnNldD0iLjU1OTciIHN0b3AtY29sb3I9IiNmZjZkMmYiIHN0b3Atb3BhY2l0eT0iLjU2MDc4NCIvPjxzdG9wIG9mZnNldD0iLjgzMzgiIHN0b3AtY29sb3I9IiNmZjU0M2EiIHN0b3Atb3BhY2l0eT0iLjgzNTI5NCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2ZmNGIzZSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJtIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjE4NS4yNjg3ODU0OSIgeDI9IjI2Ni44NzkzMTE1Mzc0IiB5MT0iMTc5Ljk1OTQyOTM3NDIiIHkyPSIyMjUuODY1MzY5MDk5NCI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZiMjExIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjZmY0YjNlIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBkPSJtLjY2Nzk2OSA0NDEuODk0NTMxcy04LjcxNDg0NC0yOTAuNjMyODEyIDMzMy4xNDg0MzctMTUxLjU4OTg0M2MxNC4yNjk1MzIgNS44MDA3ODEgMjEuMzIwMzEzIDIxLjg4MjgxMiAxNi4xMDU0NjkgMzYuMzc1LTI1LjA2NjQwNiA2OS42NzE4NzQtMTE0LjU4OTg0NCAyNDYuMTQwNjI0LTM0OS4yNTM5MDYgMTE1LjIxNDg0M3ptMCAwIiBmaWxsPSJ1cmwoI2EpIi8+PHBhdGggZD0ibTM0OS45MjE4NzUgMzI2LjY3OTY4OGMyLjg5MDYyNS04LjAzMTI1IDItMTYuNTUwNzgyLTEuNzg5MDYzLTIzLjUzOTA2My0xNzEuOTU3MDMxIDQ1LjM1NTQ2OS0zNDcuNDY0ODQzIDEzOC43NTM5MDYtMzQ3LjQ2NDg0MyAxMzguNzUzOTA2IDIzNC42NjQwNjIgMTMwLjkyNTc4MSAzMjQuMTg3NS00NS41NDI5NjkgMzQ5LjI1MzkwNi0xMTUuMjE0ODQzem0wIDAiIGZpbGw9InVybCgjYykiLz48cGF0aCBkPSJtMjUxLjQ5NjA5NCAzNjkuMTMyODEyYy0yLjg5ODQzOC0uNjc1NzgxLTUuNzUzOTA2LTEuNTYyNS04LjU4OTg0NC0yLjQwMjM0My0yLjgzMjAzMS0uODMyMDMxLTUuNjU2MjUtMS42NTYyNS04LjQyMTg3NS0yLjYzNjcxOS0yLjc4NTE1Ni0uOTEwMTU2LTUuNDUzMTI1LTIuMjQyMTg4LTguMTAxNTYzLTMuNDk2MDk0LTIuNjQ4NDM3LTEuMjczNDM3LTUuMzgyODEyLTIuMDc0MjE4LTguMjY5NTMxLTIuNDY4NzUtMi44Nzg5MDYtLjM0NzY1Ni01Ljc4NTE1Ni0uNTc0MjE4LTguODcxMDkzLS41MTE3MTggMy42NDA2MjQtMS43MjY1NjMgNy4yNzczNDMtMy40NDkyMTkgMTAuOTIxODc0LTUuMTc5Njg4bDE3Ljg5ODQzOC04LjIxODc1YzUuOTYwOTM4LTIuNzc3MzQ0IDEyLjAzNTE1Ni01LjE2MDE1NiAxOC4wMzkwNjItNy44NDc2NTYgMTIuMDgyMDMyLTUuMTQ4NDM4IDI0LjI3MzQzOC05LjgwMDc4MiAzNi44MzIwMzItMTMuNjM2NzE5bC0uNTM1MTU2LTMuMDAzOTA2LTkuOTE0MDYzIDEuNDAyMzQzLTQuOTk2MDk0LjcxMDkzOGMtMS42NTIzNDMuMjc3MzQ0LTMuMjYxNzE5LjY2NDA2Mi00LjkwMjM0My45ODgyODEtNi40ODA0NjkgMS40Njg3NS0xMy4xMjEwOTQgMi42Nzk2ODgtMTkuNTExNzE5IDQuNDY4NzUtMTIuOTQ1MzEzIDMuMjM0Mzc1LTI1LjY2MDE1NyA3LjEwNTQ2OS0zOC40MjE4NzUgMTAuOTEwMTU3LTIuNDM3NS43OTY4NzQtNC44NzUgMS41OTc2NTYtNy4zMTY0MDYgMi4zOTA2MjQgMS4xNjAxNTYtMS43OTI5NjggMi4xNzk2ODctMy42NjAxNTYgMi45MDYyNS01LjcxNDg0My45OTIxODctMi43NTc4MTMgMS45NDUzMTItNS41ODIwMzEgMy4yNzM0MzctOC4xOTE0MDcgMS4yNzM0MzctMi42NDg0MzcgMi42OTUzMTMtNS4yMTg3NSA0LjExNzE4Ny03LjgwODU5MyAxLjQxNDA2My0yLjU5Mzc1IDIuODEyNS01LjIzODI4MSA0LjM5NDUzMi03Ljc2MTcxOSAyLjk0OTIxOC01LjIzNDM3NSA2LjM3NS0xMC4xNzE4NzUgOS43NjE3MTgtMTUuMzU1NDY5bC0xLjE2NDA2Mi0xLjIzMDQ2OWMtNS4yNzczNDQgMy4yODEyNS0xMC4zNTE1NjIgNy0xNS4wODk4NDQgMTEuMTM2NzE5LTIuMzk4NDM3IDIuMDQ2ODc1LTQuNjQwNjI1IDQuMjUtNi45MjU3ODEgNi40NTMxMjUtMi4xNTYyNSAyLjI5Njg3NS00LjMyODEyNSA0LjYwOTM3NS02LjM3MTA5NCA3LjAzMTI1LTIuMDYyNSAyLjQxMDE1Ni00LjMwMDc4MSA0LjczNDM3NS02LjQzMzU5MyA3LjE2Nzk2OS0yLjA3MDMxMyAyLjQ2NDg0NC0zLjY5OTIxOSA1LjIzNDM3NS00LjcxNDg0NCA4LjMwMDc4MS0uMTkxNDA2LjYwMTU2My0uMzc1IDEuMjEwOTM4LS41NDY4NzUgMS44MjgxMjUtMS44Nzg5MDcgNi42OTUzMTMtNy4wMTk1MzEgMTEuOTg0Mzc1LTEzLjU4MjAzMSAxNC4yODEyNWwtLjEyMTA5NC4wNDI5NjljLTExLjQxNzk2OSA0LTIyLjcxODc1IDguMjQyMTg4LTM0LjA1ODU5NCAxMi40Mjk2ODggMS41NzAzMTItMi41NTg1OTQgMi44MjgxMjUtNS4xMDkzNzYgMy45Njg3NS03LjY5OTIxOSAxLjEzMjgxMi0yLjY4MzU5NCAxLjgzNTkzOC01LjQ0NTMxMyAyLjA5Mzc1LTguMzY3MTg4LjI2OTUzMS0yLjkxNzk2OS40ODQzNzUtNS44OTQ1MzEgMS4xMjEwOTQtOC43NTM5MDYuNTcwMzEyLTIuODgyODEzIDEuMzAwNzgxLTUuNzI2NTYzIDIuMDI3MzQ0LTguNTg5ODQ0LjcyMjY1Ni0yLjg2NzE4NyAxLjQxNzk2OC01Ljc3MzQzNyAyLjMxMjUtOC42MTMyODEgMS41NDY4NzQtNS44MDg1OTQgMy42Mjg5MDYtMTEuNDQ5MjE5IDUuNjA5Mzc0LTE3LjMxMjVsLTEuNDMzNTkzLS45MDIzNDRjLTQuMjg5MDYzIDQuNS04LjI3MzQzOCA5LjM3MTA5NC0xMS44MjQyMTkgMTQuNTYyNS0xLjgwODU5NCAyLjU4MjAzMi0zLjQyOTY4OCA1LjI3NzM0NC01LjA4OTg0NCA3Ljk4MDQ2OS0xLjUxMTcxOCAyLjc2MTcxOS0zLjAzOTA2MiA1LjU0Njg3NS00LjQwNjI1IDguNDAyMzQ0LTEuMzk4NDM3IDIuODUxNTYyLTIuOTgwNDY4IDUuNjYwMTU2LTQuNDM3NSA4LjU1MDc4MS0xLjM4NjcxOCAyLjkwNjI1LTIuMjY5NTMxIDUuOTkyMTg4LTIuNDg0Mzc1IDkuMjE0ODQ0LS4wODIwMzEgMS40MjU3ODEtLjEwOTM3NSAyLjg2MzI4MS0uMDU4NTkzIDQuMzE2NDA2LjI0MjE4NyA3LjA3MDMxMi00LjM2NzE4OCAxMy40MTAxNTYtMTEuMDM1MTU3IDE1Ljc3NzM0NC01LjcyMjY1NiAyLjAyNzM0NC0xMS40NTcwMzEgNC4wNTA3ODEtMTcuMTY0MDYyIDYuMTIxMDk0LTcuMjM4MjgxIDIuNjA5Mzc0LTE0LjMxNjQwNyA1LjU4MjAzMS0yMS4yNjU2MjUgOC44MjQyMTggMS4zMDA3ODEtMi4yMzA0NjggMi4zOTQ1MzEtNC40NjA5MzcgMy4zOTQ1MzEtNi43MjI2NTYgMS4xMjg5MDYtMi42ODM1OTQgMS44MzIwMzEtNS40NDUzMTIgMi4wODk4NDQtOC4zNjcxODguMjY5NTMxLTIuOTIxODc0LjQ4ODI4MS01Ljg5NDUzMSAxLjEyMTA5My04Ljc1NzgxMi41NzAzMTMtMi44Nzg5MDYgMS4zMDA3ODItNS43MjI2NTYgMi4wMjczNDQtOC41ODU5MzguNzIyNjU2LTIuODY3MTg3IDEuNDE0MDYzLTUuNzc3MzQzIDIuMzEyNS04LjYxNzE4NyAxLjU0Njg3NS01LjgwNDY4NyAzLjYzMjgxMy0xMS40NDUzMTMgNS42MDkzNzUtMTcuMzA4NTk0bC0xLjQzMzU5My0uOTAyMzQzYy00LjI4OTA2MyA0LjUtOC4yNjk1MzIgOS4zNzEwOTMtMTEuODI0MjE5IDE0LjU2MjUtMS44MDg1OTQgMi41ODIwMzEtMy40Mjk2ODggNS4yNzczNDMtNS4wODk4NDQgNy45ODA0NjgtMS41MTE3MTkgMi43NjE3MTktMy4wMzUxNTYgNS41NDY4NzUtNC40MDYyNSA4LjQwMjM0NC0xLjM5ODQzNyAyLjg0NzY1Ni0yLjk3NjU2MyA1LjY2MDE1Ni00LjQzMzU5NCA4LjU0Njg3NS0xLjM5MDYyNSAyLjkxMDE1Ni0yLjI3MzQzNyA1Ljk5NjA5NC0yLjQ4ODI4MSA5LjIxODc1LS4xNzk2ODggMy4yMDMxMjUtLjA5Mzc1IDYuNDg0Mzc1LjU0Njg3NSA5Ljc4OTA2My43MzA0NjkgMy43ODUxNTYtLjkxMDE1NiA3LjYxMzI4MS00LjI1MzkwNiA5LjUzOTA2Mi04LjY0ODQzOCA0Ljk4ODI4MS0yNC4yMTA5MzggMTQuMTM2NzE5LTMyLjE0ODQzOCAxOS41NjY0MDYtMTEuMDAzOTA2IDcuNjQ0NTMyLTIxLjc4MTI1IDE1Ljc0NjA5NC0zMS43MzgyODEgMjUuNDYwOTM4bDEuMzM5ODQ0IDIuNzQyMTg3YzEzLjc1LTEuODMyMDMxIDI2Ljc5Njg3NS01LjA0Mjk2OSAzOS42MTMyODEtOC43MDcwMzEgMTIuODA0Njg3LTMuNjk1MzEyIDI1LjMyODEyNS03LjkzNzUgMzcuNjI4OTA2LTEyLjY0MDYyNS4yMTg3NS0uMDgyMDMxLjQzNzUtLjE2NDA2My42NTIzNDQtLjI0NjA5NCAzLjk2ODc1LTEuNTE1NjI1IDguMzIwMzEzLS4wMDc4MTIgMTAuNzU3ODEzIDMuNDY4NzUgMS44MDA3ODEgMi41NTg1OTQgMy45MTQwNjIgNC43NzM0MzggNi4xNDQ1MzEgNi43ODEyNSAyLjQyNTc4MSAyLjEyODkwNyA1LjIyNjU2MiAzLjY5NTMxMyA4LjI2MTcxOSA0Ljc3NzM0NCAzLjA3MDMxMiAxLjAyMzQzNyA2LjE3MTg3NCAxLjg5ODQzNyA5LjE3MTg3NCAyLjkzMzU5NCAyLjk4NDM3NiAxLjA2MjUgNi4wMzEyNSAxLjk2MDkzNyA5LjA1MDc4MiAyLjg1MTU2MiAzLjA4MjAzMS43NDYwOTQgNi4xMzI4MTIgMS41MTE3MTkgOS4yMzQzNzUgMi4wNzAzMTMgNi4xODM1OTMgMS4xNzU3ODEgMTIuNDQxNDA2IDEuODE2NDA2IDE4LjY1MjM0MyAxLjk4NDM3NWwuMzgyODEzLTEuNjUyMzQ0Yy01LjUzOTA2My0yLjc2MTcxOS0xMC45OTYwOTQtNS4yODkwNjMtMTYuMTgzNTk0LTguMzE2NDA2LTIuNjQwNjI1LTEuMzgyODEzLTUuMTgzNTkzLTIuOTUzMTI1LTcuNzE0ODQzLTQuNDc2NTYzLTIuNTM1MTU3LTEuNTE1NjI1LTUuMDYyNS0zLjAxOTUzMS03LjQ5NjA5NC00LjY2MDE1Ni0yLjQ2ODc1LTEuNTc4MTI1LTQuNzE4NzUtMy41MzUxNTYtNi45Njg3NS01LjQxNDA2Mi0yLjI0MjE4OC0xLjg5MDYyNi00LjY4NzUtMy4zNTU0NjktNy4zODI4MTMtNC40NjA5MzgtMi45NDE0MDYtMS4xNDg0MzgtNS45NzY1NjItMi4xNDQ1MzEtOS4yOTY4NzUtMi44NzUgNi4yNjk1MzItMi44NzEwOTQgMTIuNDQ5MjE5LTUuOTU3MDMxIDE4LjUzMTI1LTkuMjQyMTg4IDQuODM1OTM4LTIuNjcxODc0IDExLjM5NDUzMi02LjE5NTMxMiAxNy4xNzE4NzUtOS4yNzM0MzcgNi4xMzY3MTktMy4yNzczNDQgMTMuNzg1MTU3LTIuMzk4NDM3IDE4Ljc1NzgxMyAyLjQ2ODc1IDIuNDI5Njg3IDIuMzc4OTA2IDUuMTkxNDA2IDQuMzg2NzE5IDcuNTExNzE4IDYuNDY4NzUgMi40MjE4NzYgMi4xMzI4MTMgNS4yMjY1NjMgMy42OTkyMTkgOC4yNjE3MTkgNC43ODEyNSAzLjA3MDMxMyAxLjAxOTUzMSA2LjE3MTg3NSAxLjg5ODQzNyA5LjE3MTg3NSAyLjkzMzU5NCAyLjk4NDM3NSAxLjA1ODU5MyA2LjAyNzM0NCAxLjk1NzAzMSA5LjA1MDc4MiAyLjg1MTU2MiAzLjA4MjAzMS43NDIxODggNi4xMzI4MTIgMS41MTE3MTkgOS4yMzQzNzQgMi4wNjY0MDcgNi4xNzk2ODggMS4xNzU3ODEgMTIuNDQxNDA3IDEuODIwMzEyIDE4LjY1MjM0NCAxLjk4ODI4MWwuMzgyODEzLTEuNjUyMzQ0Yy01LjUzOTA2My0yLjc2MTcxOS0xMC45OTYwOTQtNS4yODkwNjMtMTYuMTgzNTk0LTguMzE2NDA2LTIuNjQwNjI1LTEuMzgyODEzLTUuMTgzNTk0LTIuOTUzMTI1LTcuNzE0ODQ0LTQuNDc2NTYzLTIuNTM1MTU2LTEuNTE5NTMxLTUuMDU4NTkzLTMuMDE5NTMxLTcuNDk2MDkzLTQuNjYwMTU2LTIuNDY4NzUtMS41ODIwMzEtNC43MTg3NS0zLjUzOTA2Mi02Ljk2ODc1LTUuNDE3OTY5LTIuMjQyMTg4LTEuODkwNjI1LTQuNjkxNDA3LTMuMzUxNTYyLTcuMzg2NzE5LTQuNDU3MDMxLTUuMTgzNTk0LTIuMDI3MzQ0LTEwLjYxNzE4OC0zLjYwOTM3NS0xNy41NjY0MDctMy45NTcwMzEgMTEuNzczNDM4LTUuNzgxMjUgMjMuNTE5NTMyLTExLjY3OTY4OCAzNS4zNzUtMTcuMjczNDM4bC40NTcwMzItLjIzMDQ2OWM3LjEzMjgxMi0zLjU2MjUgMTUuNzc3MzQ0LTMuMTc5Njg3IDIyLjIxODc1IDEuNTIzNDM4IDEuODIwMzEyIDEuMzI4MTI1IDMuNzM4MjgxIDIuNDYwOTM4IDUuNjgzNTk0IDMuNDcyNjU2IDIuODc4OTA2IDEuNDU3MDMyIDUuOTg0Mzc0IDIuMjczNDM4IDkuMTk1MzEyIDIuNTU4NTk0IDMuMjI2NTYyLjIyMjY1NiA2LjQ1MzEyNS4yOTI5NjkgOS42MTMyODEuNTQ2ODc1IDMuMTU2MjUuMjc3MzQ0IDYuMzI4MTI1LjM4NjcxOSA5LjQ3NjU2My40OTIxODcgMy4xNzE4NzUtLjA1MDc4MSA2LjMxNjQwNi0uMDcwMzEyIDkuNDYwOTM3LS4zMDg1OTMgNi4yNzczNDQtLjQwNjI1IDEyLjQ5NjA5NC0xLjM1MTU2MyAxOC41NTQ2ODgtMi43NDIxODhsLS4wNDY4NzUtMS42OTUzMTJjLTYuMDU0Njg4LTEuMjg5MDYzLTExLjk2ODc1LTIuMzcxMDk0LTE3Ljc1LTQuMDAzOTA3em0wIDAiIGZpbGw9InVybCgjZCkiLz48cGF0aCBkPSJtMzMwLjE2Nzk2OSAyOTAuNDU3MDMxYy0xMDIuOTY0ODQ0LTQyLjczODI4MS0xNzMuNTk3NjU3LTQ1LjAzOTA2Mi0yMjIuMDU0Njg4LTI3LjY2NDA2MiAxNi40NDE0MDcgNDQuNDE3OTY5IDQ2Ljg3NSA3Ni4yNSA1NC43NzM0MzggODQuMDE1NjI1bDEwMS43MTA5MzcgMTAzLjgwNDY4N2M0NS41MTk1MzItMzcuMDcwMzEyIDcwLjEyMTA5NC05MS41OTM3NSA4MS40MTQwNjMtMTIzLjYzMjgxMiA1LjEzMjgxMi0xNC41NTA3ODEtMS44MDg1OTQtMzAuNjk5MjE5LTE1Ljg0Mzc1LTM2LjUyMzQzOHptMCAwIiBmaWxsPSJ1cmwoI2UpIi8+PHBhdGggZD0ibTUxMS4xNTYyNSA0MDcuOTYwOTM4cy0yNDYuMjE4NzUgMTU0LjY2MDE1Ni0yOTkuMzk4NDM4LTIxMC41NDI5NjljLTIuMjE4NzUtMTUuMjQyMTg4IDguMDc4MTI2LTI5LjQ2NDg0NCAyMy4yMTg3NS0zMi4zMDg1OTQgNzIuNzczNDM4LTEzLjY1MjM0NCAyNzAuMjc3MzQ0LTI1Ljc5Njg3NSAyNzYuMTc5Njg4IDI0Mi44NTE1NjN6bTAgMCIgZmlsbD0idXJsKCNmKSIvPjxwYXRoIGQ9Im0yMzQuOTc2NTYyIDE2NS4xMTMyODFjLTguMzk0NTMxIDEuNTc0MjE5LTE1LjI4OTA2MiA2LjY1NjI1LTE5LjM5NDUzMSAxMy40NjA5MzggMTI2LjE3MTg3NSAxMjUuMzI0MjE5IDI5NS41NzQyMTkgMjI5LjM4NjcxOSAyOTUuNTc0MjE5IDIyOS4zODY3MTktNS45MDIzNDQtMjY4LjY0ODQzOC0yMDMuNDA2MjUtMjU2LjUwMzkwNy0yNzYuMTc5Njg4LTI0Mi44NDc2NTd6bTAgMCIgZmlsbD0idXJsKCNoKSIvPjxwYXRoIGQ9Im0zMjEuNDE3OTY5IDIyOC41Yy44ODY3MTkgMi44NDM3NSAxLjU2NjQwNiA1Ljc1MzkwNiAyLjI3NzM0MyA4LjYyMTA5NC43MTQ4NDQgMi44NjcxODcgMS40MzM1OTQgNS43MTQ4NDQgMS45OTIxODggOC41OTc2NTYuNjIxMDk0IDIuODY3MTg4LjgyNDIxOSA1LjgzOTg0NCAxLjA4MjAzMSA4Ljc2MTcxOS4yNDYwOTQgMi45MjE4NzUuOTM3NSA1LjY4NzUgMi4wNTg1OTQgOC4zNzg5MDYgMS4xNTYyNSAyLjY1NjI1IDIuNDM3NSA1LjI3NzM0NCA0LjA1MDc4MSA3LjkwNjI1LTMuMzI4MTI1LTIuMjY1NjI1LTYuNjYwMTU2LTQuNTMxMjUtOS45OTYwOTQtNi43OTY4NzVsLTE2LjE0ODQzNy0xMS4yNjk1MzFjLTUuNDE0MDYzLTMuNzM4MjgxLTEwLjU0Mjk2OS03Ljc2NTYyNS0xNS45MDIzNDQtMTEuNTg1OTM4LTEwLjU1ODU5My03LjgxMjUtMjAuNzM4MjgxLTE1Ljk3MjY1Ni0zMC40MDYyNS0yNC44NTkzNzVsLTIuMzIwMzEyIDEuOTgwNDY5IDYuMjMwNDY5IDcuODQzNzUgMy4xNDQ1MzEgMy45NDUzMTNjMS4wNzQyMTkgMS4yODUxNTYgMi4yMjI2NTYgMi40ODA0NjggMy4zMzIwMzEgMy43MjY1NjIgNC41NDY4NzUgNC44NDc2NTYgOC45NTMxMjUgOS45NjQ4NDQgMTMuNzMwNDY5IDE0LjU2NjQwNiA5LjM0Mzc1IDkuNTI3MzQ0IDE5LjEyMTA5MyAxOC41MzEyNSAyOC44NjMyODEgMjcuNjA5Mzc1IDEuOTIxODc1IDEuNjk5MjE5IDMuODQzNzUgMy4zOTg0MzggNS43NjU2MjUgNS4xMDE1NjMtMi4xMzY3MTktLjA5Mzc1LTQuMjU3ODEzLS4wMjczNDQtNi4zOTg0MzcuMzg2NzE4LTIuODc4OTA3LjUzOTA2My01LjgwMDc4MiAxLjE0ODQzOC04LjcyNjU2MyAxLjMyNDIxOS0yLjkyNTc4MS4yNDIxODgtNS44NjMyODEuMzIwMzEzLTguODE2NDA2LjQwMjM0NC0yLjk1MzEyNS4wOTM3NS01LjkzNzUuMjIyNjU2LTguOTE3OTY5LjE0MDYyNS02LjAwNzgxMi4xMDU0NjktMTItLjM1MTU2Mi0xOC4xODM1OTQtLjY0NDUzMWwtLjQ3MjY1NiAxLjYyNWM1LjUgMi44OTA2MjUgMTEuMjc3MzQ0IDUuMzgyODEyIDE3LjI0NjA5NCA3LjM3NSAyLjk3NjU2MiAxLjAzMTI1IDYuMDExNzE4IDEuODUxNTYyIDkuMDcwMzEyIDIuNzA3MDMxIDMuMDcwMzEzLjY5NTMxMiA2LjE2NDA2MyAxLjM5ODQzOCA5LjI4OTA2MyAxLjkzMzU5NCAzLjEyMTA5My41NTg1OTQgNi4yNTc4MTIgMS4zMDg1OTQgOS40Mzc1IDEuOTE3OTY4IDMuMTc1NzgxLjUzOTA2MyA2LjM4NjcxOS41MzkwNjMgOS41NDI5NjktLjEzNjcxOC42MTcxODctLjEzNjcxOSAxLjIzODI4MS0uMjg5MDYzIDEuODU1NDY4LS40NTMxMjUgNi43MjI2NTYtMS43Njk1MzEgMTMuODg2NzE5LS4wMTU2MjUgMTkuMTkxNDA2IDQuNDgwNDY5bC4wOTc2NTcuMDgyMDMxYzkuMjMwNDY5IDcuODI0MjE5IDE4LjYwOTM3NSAxNS40MjE4NzUgMjcuOTYwOTM3IDIzLjA4MjAzMS0zLS4wNTg1OTQtNS44MzU5MzcuMTQ4NDM4LTguNjQ4NDM3LjQ3MjY1Ni0yLjg4NjcxOS4zODI4MTMtNS42MjUgMS4xNzU3ODItOC4yNzczNDQgMi40MzM1OTQtMi42NTIzNDQgMS4yNDYwOTQtNS4zMjgxMjUgMi41NjY0MDYtOC4xMTMyODEgMy40NjQ4NDQtMi43NzM0MzguOTY4NzUtNS41OTc2NTYgMS43ODEyNS04LjQzNzUgMi42MDE1NjItMi44MzU5MzguODI4MTI1LTUuNjk1MzEzIDEuNzAzMTI1LTguNTk3NjU2IDIuMzY3MTg4LTUuNzg5MDYzIDEuNjA1NDY4LTExLjcwNzAzMiAyLjY2NDA2Mi0xNy43NjU2MjYgMy45MjU3ODFsLS4wNTQ2ODcgMS42OTUzMTNjNi4wNTQ2ODcgMS40MTc5NjggMTIuMjY5NTMxIDIuMzg2NzE4IDE4LjU0Njg3NSAyLjgyMDMxMiAzLjE0MDYyNS4yNTM5MDYgNi4yODUxNTYuMjg1MTU2IDkuNDU3MDMxLjM1MTU2MiAzLjE0ODQzOC0uMDkzNzUgNi4zMjAzMTMtLjE5MTQwNiA5LjQ4MDQ2OS0uNDU3MDMxIDMuMTY0MDYyLS4yMzgyODEgNi4zODY3MTktLjI5Njg3NSA5LjYxMzI4MS0uNTAzOTA2IDMuMjEwOTM4LS4yNzM0MzcgNi4zMjAzMTMtMS4wNzQyMTkgOS4yMDcwMzEtMi41MTk1MzEgMS4yNjk1MzItLjY1MjM0NCAyLjUyNzM0NC0xLjM1OTM3NSAzLjc1MzkwNy0yLjEzNjcxOSA1Ljk3MjY1Ni0zLjc4NTE1NiAxMy43NzM0MzctMy4wMjM0MzcgMTkuMTkxNDA2IDEuNTMxMjUgNC42NDg0MzcgMy45MDYyNSA5LjI5Mjk2OSA3LjgyODEyNSAxMy45Njg3NSAxMS42OTkyMTkgNS45MTc5NjkgNC45MjE4NzUgMTIuMDYyNSA5LjUxOTUzMSAxOC4zNzg5MDYgMTMuODc1LTIuNTg1OTM3LjAwMzkwNi01LjA2MjUuMTkxNDA2LTcuNTE1NjI1LjQ3NjU2Mi0yLjg5MDYyNS4zODI4MTMtNS42MjUgMS4xNzU3ODItOC4yNzczNDQgMi40MzM1OTQtMi42NTYyNSAxLjI0NjA5NC01LjMyODEyNCAyLjU2NjQwNi04LjExNzE4NyAzLjQ2NDg0NC0yLjc3MzQzNy45Njg3NS01LjU5NzY1NiAxLjc3NzM0NC04LjQzMzU5NCAyLjU5NzY1Ni0yLjgzOTg0My44MzIwMzEtNS42OTUzMTIgMS43MDcwMzEtOC42MDE1NjIgMi4zNjcxODgtNS43ODkwNjMgMS42MDkzNzQtMTEuNzA3MDMxIDIuNjY3OTY4LTE3Ljc2NTYyNSAzLjkyNTc4MWwtLjA1MDc4MiAxLjY5NTMxMmM2LjA1MDc4MiAxLjQyMTg3NSAxMi4yNjU2MjYgMi4zOTA2MjUgMTguNTQyOTY5IDIuODI0MjE5IDMuMTQ0NTMxLjI1MzkwNiA2LjI4NTE1Ny4yODUxNTYgOS40NTcwMzEuMzUxNTYyIDMuMTQ4NDM4LS4wOTc2NTYgNi4zMjAzMTMtLjE5MTQwNiA5LjQ4MDQ2OS0uNDU3MDMxIDMuMTY0MDYzLS4yMzgyODEgNi4zODY3MTktLjI5Njg3NSA5LjYxNzE4OC0uNTAzOTA2IDMuMjA3MDMxLS4yNzM0MzcgNi4zMTY0MDYtMS4wNzQyMTkgOS4yMDcwMzEtMi41MTk1MzEgMi44NTE1NjItMS40Njg3NSA1LjYzNjcxOS0zLjIwMzEyNSA4LjE2NDA2Mi01LjQyOTY4OCAyLjg5NDUzMi0yLjU0Njg3NSA3LjAyNzM0NC0zLjA3MDMxMiAxMC4zNzg5MDctMS4xNjQwNjIgOC42Nzk2ODcgNC45MzM1OTQgMjQuNDQ5MjE5IDEzLjcyNjU2MiAzMy4xNTIzNDMgMTcuODIwMzEyIDEyLjE2NDA2MyA1LjYyMTA5NCAyNC42MDU0NjkgMTAuODA4NTk0IDM4LjAyMzQzOCAxNC40ODA0NjlsMS42ODc1LTIuNTQyOTY5Yy04LjUzOTA2Mi0xMC45MzM1OTQtMTcuOTE0MDYyLTIwLjU1ODU5NC0yNy41NjI1LTI5Ljc1MzkwNi05LjY3MTg3NS05LjE3MTg3NS0xOS42Njc5NjktMTcuODI0MjE5LTI5Ljk1MzEyNS0yNi4wNTA3ODEtLjE3OTY4Ny0uMTQ0NTMxLS4zNjMyODEtLjI5Mjk2OS0uNTQyOTY5LS40Mzc1LTMuMzE2NDA2LTIuNjUyMzQ0LTQuMjE4NzUtNy4xNjc5NjktMi40NTcwMzEtMTEuMDMxMjUgMS4zMDA3ODEtMi44NTE1NjMgMi4xNDA2MjUtNS43OTI5NjkgMi43MzgyODEtOC43MzA0NjkuNjA5Mzc1LTMuMTcxODc1LjU0Mjk2OS02LjM3ODkwNi0uMDYyNS05LjU0Njg3NS0uNjcxODc1LTMuMTY0MDYzLTEuNDg0Mzc1LTYuMjg1MTU2LTIuMTEzMjgxLTkuMzk0NTMxLS41OTc2NTYtMy4xMDkzNzUtMS4zNjMyODEtNi4xOTE0MDYtMi4xMjEwOTQtOS4yNDYwOTQtLjkyMTg3NS0zLjAzOTA2Mi0xLjgwMDc4MS02LjA1NDY4OC0yLjg5NDUzMS05LjAxMTcxOS0yLjExNzE4OC01LjkyNTc4MS00LjcyNjU2Mi0xMS42NDg0MzctNy43MzA0NjktMTcuMDkzNzVsLTEuNjE3MTg3LjUwNzgxM2MuNDIxODc1IDYuMTc1NzgxIDEuMDAzOTA2IDEyLjE2MDE1NiAxLjAxOTUzMSAxOC4xNjc5NjguMTQ4NDM3IDIuOTcyNjU3LjA3ODEyNSA1Ljk2MDkzOC4wNDY4NzUgOC45MTc5NjktLjAyMzQzOCAyLjk1MzEyNS0uMDQyOTY5IDUuODkwNjI1LS4yMjI2NTYgOC44MjQyMTktLjExMzI4MiAyLjkyNTc4MS0uNjYwMTU2IDUuODU5Mzc1LTEuMTQ0NTMyIDguNzUtLjQ5NjA5MyAyLjg5MDYyNS0uNTE1NjI0IDUuNzQyMTg4LS4xMDU0NjggOC42MjUuNDk2MDk0IDMuMTIxMDk0IDEuMTc1NzgxIDYuMjQyMTg4IDIuMjI2NTYyIDkuNDcyNjU2LTUuNjUyMzQ0LTMuOTUzMTI1LTExLjQzNzUtNy43MTg3NS0xNy4zNTE1NjItMTEuMzAwNzgxLTQuNzUzOTA2LTIuODIwMzEzLTExLjExMzI4Mi02LjY5MTQwNi0xNi42OTE0MDYtMTAuMTA5Mzc1LTUuOTMzNTk0LTMuNjM2NzE5LTkuMDUwNzgyLTEwLjY3NTc4MS03LjM2NzE4OC0xNy40MjU3ODEuODIwMzEyLTMuMzA0Njg4IDEuMTUyMzQ0LTYuNjk5MjE5IDEuNzczNDM4LTkuNzUzOTA3LjYwOTM3NC0zLjE3MTg3NC41NDI5NjgtNi4zODI4MTItLjA1ODU5NC05LjU0Njg3NC0uNjc1NzgyLTMuMTY0MDYzLTEuNDg4MjgyLTYuMjg1MTU3LTIuMTE3MTg4LTkuMzk0NTMyLS41OTc2NTYtMy4xMTMyODEtMS4zNjMyODEtNi4xOTE0MDYtMi4xMjEwOTQtOS4yNDYwOTQtLjkyMTg3NC0zLjAzOTA2Mi0xLjgwMDc4MS02LjA1NDY4Ny0yLjg5NDUzMS05LjAxNTYyNC0yLjExMzI4MS01LjkyMTg3Ni00LjcyNjU2Mi0xMS42NDQ1MzItNy43MzA0NjktMTcuMDg5ODQ0bC0xLjYxNzE4Ny41MDc4MTJjLjQyNTc4MSA2LjE3NTc4MiAxLjAwMzkwNiAxMi4xNjAxNTYgMS4wMTk1MzEgMTguMTY3OTY5LjE0ODQzOCAyLjk3NjU2My4wNzgxMjUgNS45NjQ4NDQuMDQ2ODc1IDguOTE3OTY5LS4wMjM0MzcgMi45NTMxMjUtLjA0Mjk2OSA1Ljg5NDUzMS0uMjIyNjU2IDguODI0MjE4LS4xMTMyODEgMi45MjU3ODItLjY2MDE1NiA1Ljg1OTM3Ni0xLjE0NDUzMSA4Ljc1LS40OTIxODggMi44OTQ1MzItLjUxNTYyNSA1Ljc0MjE4OC0uMTA1NDY5IDguNjI4OTA3Ljg3NSA1LjQ5MjE4NyAyLjI2NTYyNSAxMC45ODA0NjkgNS40ODQzNzUgMTcuMTQ4NDM3LTEwLjk0NTMxMi03LjIyNjU2Mi0yMS45ODA0NjktMTQuMzY3MTg3LTMyLjgwODU5NC0yMS43NTc4MTJsLS40MjU3ODEtLjI3NzM0NGMtNi42ODc1LTQuMzQ3NjU2LTEwLjczMDQ2OS0xMS45OTYwOTQtOS45Mzc1LTE5LjkzMzU5NC4yMjI2NTYtMi4yNDIxODcuMjMwNDY5LTQuNDY4NzUuMTE3MTg3LTYuNjYwMTU2LS4yMDMxMjQtMy4yMjI2NTYtMS4wNzAzMTItNi4zMTI1LTIuNDQ5MjE4LTkuMjIyNjU2LTEuNDQ1MzEzLTIuODk4NDM4LTMuMDExNzE5LTUuNzE0ODQ0LTQuMzk4NDM4LTguNTY2NDA2LTEuMzU1NDY4LTIuODYzMjgyLTIuODY3MTg3LTUuNjU2MjUtNC4zNzEwOTQtOC40MjE4NzYtMS42NDg0MzctMi43MTA5MzctMy4yNTc4MTItNS40MTQwNjItNS4wNTQ2ODctOC4wMDM5MDYtMy41MzEyNS01LjIwNzAzMS03LjQ5MjE4Ny0xMC4wOTM3NS0xMS43NjE3MTktMTQuNjA5Mzc1bC0xLjQ0MTQwNi44OTQ1MzFjMS45NjA5MzggNS44NzUgNC4wMTk1MzEgMTEuNTE5NTMyIDUuNTQyOTY5IDE3LjMzNTkzOHptMCAwIiBmaWxsPSJ1cmwoI2kpIi8+PHBhdGggZD0ibTUxMS4xNTYyNSA0MDcuOTYwOTM4Yy01LjkwMjM0NC0yNjguNjQ4NDM4LTIwMy40MDYyNS0yNTYuNTAzOTA3LTI3Ni4xNzk2ODgtMjQyLjg0NzY1Ny0xNS4xNDA2MjQgMi44Mzk4NDQtMjUuNDM3NSAxNy4wNjI1LTIzLjIxODc1IDMyLjMwNDY4OCA1My4xNzk2ODggMzY1LjIwMzEyNSAyOTkuMzk4NDM4IDIxMC41NDI5NjkgMjk5LjM5ODQzOCAyMTAuNTQyOTY5em0wIDAiIGZpbGw9InVybCgjaikiLz48cGF0aCBkPSJtMTY1LjczMDQ2OSAzNDguMjYxNzE5cy0yMTYuMzg2NzE5LTE5NC4yMTQ4NDQgMTIwLjEyODkwNi0zNDUuNzQyMTg4YzE0LjA0Mjk2OS02LjMyNDIxOSAzMC41NTA3ODEtLjMzMjAzMSAzNy40NDE0MDYgMTMuNDQxNDA3IDMzLjEzNjcxOSA2Ni4yMTA5MzcgOTkuMTA1NDY5IDI1Mi43NzM0MzctMTU3LjU3MDMxMiAzMzIuMzAwNzgxem0wIDAiIGZpbGw9InVybCgjaykiLz48cGF0aCBkPSJtMzIzLjMwMDc4MSAxNS45NTcwMzFjLTMuODIwMzEyLTcuNjM2NzE5LTEwLjYwMTU2Mi0xMi44NjcxODctMTguMjczNDM3LTE0Ljk0NTMxMi04NS44MTI1IDE1NS43NjU2MjUtMTM5LjI5Njg3NSAzNDcuMjQ2MDkzLTEzOS4yOTY4NzUgMzQ3LjI0NjA5MyAyNTYuNjc1NzgxLTc5LjUyMzQzNyAxOTAuNzA3MDMxLTI2Ni4wODU5MzcgMTU3LjU3MDMxMi0zMzIuMzAwNzgxem0wIDAiIGZpbGw9InVybCgjbCkiLz48cGF0aCBkPSJtMjg2LjEyMTA5NCAxMTYuNDk2MDk0Yy0yLjQ4ODI4MiAxLjYzMjgxMi01LjEwMTU2MyAzLjA4NTkzNy03LjY2NDA2MyA0LjU1ODU5NC0yLjU1ODU5MyAxLjQ3NjU2Mi01LjEwMTU2MiAyLjk0OTIxOC03LjcxODc1IDQuMjc3MzQzLTIuNTgyMDMxIDEuMzg2NzE5LTUuMzg2NzE5IDIuNDAyMzQ0LTguMTI1IDMuNDUzMTI1LTIuNzQ2MDkzIDEuMDM1MTU2LTUuMjEwOTM3IDIuNDYwOTM4LTcuNDg4MjgxIDQuMjc3MzQ0LTIuMjM4MjgxIDEuODQ3NjU2LTQuNDA2MjUgMy43OTY4NzUtNi40OTIxODggNi4wNzAzMTIgMS4yNjE3MTktMy44MjQyMTggMi41MjM0MzgtNy42NDg0MzcgMy43ODkwNjMtMTEuNDgwNDY4bDYuMzk0NTMxLTE4LjYyNWMyLjEwNTQ2OS02LjIzNDM3NSA0LjU3MDMxMy0xMi4yNjk1MzIgNi43Njk1MzItMTguNDcyNjU2IDQuNjA5Mzc0LTEyLjI5Njg3NiA5LjY1MjM0My0yNC4zMzIwMzIgMTUuNTQyOTY4LTM2LjA3MDMxM2wtMi41NDI5NjgtMS42ODM1OTQtNS44MzIwMzIgOC4xNDQ1MzEtMi45Mjk2ODcgNC4xMDU0NjljLS45Mzc1IDEuMzkwNjI1LTEuNzczNDM4IDIuODIwMzEzLTIuNjY0MDYzIDQuMjMwNDY5LTMuNDEwMTU2IDUuNzAzMTI1LTcuMTE3MTg3IDExLjM0NzY1Ni0xMC4yMzA0NjggMTcuMjA3MDMxLTYuNTg5ODQ0IDExLjYwMTU2My0xMi41NjI1IDIzLjQ3MjY1Ny0xOC42MTMyODIgMzUuMzM5ODQ0LTEuMTAxNTYyIDIuMzEyNS0yLjIxMDkzNyA0LjYzMjgxMy0zLjMxNjQwNiA2Ljk0NTMxMy0uNDk2MDk0LTIuMDc4MTI2LTEuMTQ4NDM4LTQuMTAxNTYzLTIuMTI4OTA2LTYuMDQ2ODc2LTEuMzEyNS0yLjYyMTA5My0yLjY5OTIxOS01LjI1NzgxMi0zLjY3MTg3NS04LjAyMzQzNy0xLjAzOTA2My0yLjc0NjA5NC0xLjkyMTg3NS01LjU1MDc4MS0yLjgxMjUtOC4zNjcxODctLjkwMjM0NC0yLjgxMjUtMS44NTE1NjMtNS42NDg0MzgtMi41ODU5MzgtOC41MzUxNTctMS43NTM5MDYtNS43NDYwOTMtMi45NjQ4NDMtMTEuNjM2NzE5LTQuMzc4OTA2LTE3LjY2MDE1NmwtMS42OTUzMTMtLjAwNzgxM2MtMS4yNjU2MjQgNi4wODU5MzgtMi4wNzQyMTggMTIuMzI0MjE5LTIuMzUxNTYyIDE4LjYwOTM3Ni0uMTcxODc1IDMuMTQ4NDM3LS4xMjUgNi4yODkwNjItLjEwNTQ2OSA5LjQ2NDg0My4xNzE4NzUgMy4xNDQ1MzEuMzUxNTYzIDYuMzEyNS42OTUzMTMgOS40NjA5MzguMzE2NDA2IDMuMTU2MjUuNDYwOTM3IDYuMzc4OTA2Ljc0NjA5NCA5LjYwMTU2Mi4zNTU0NjggMy4yMDMxMjUgMS4yMzgyODEgNi4yODkwNjMgMi43NTM5MDYgOS4xNDA2MjUuMzA0Njg3LjU1NDY4OC42MjEwOTQgMS4xMDkzNzUuOTQ1MzEyIDEuNjYwMTU2IDMuNTUwNzgyIDUuOTc2NTYzIDMuODM1OTM4IDEzLjM0NzY1Ny45Njg3NSAxOS42Nzk2ODhsLS4wNTA3ODEuMTE3MTg4Yy00Ljk4NDM3NSAxMS4wMjczNDMtOS43MTA5MzcgMjIuMTMyODEyLTE0LjUwMzkwNiAzMy4yMzA0NjgtLjc2OTUzMS0yLjg5ODQzNy0xLjc0NjA5NC01LjU3MDMxMi0yLjgzMjAzMS04LjE4MzU5NC0xLjE2NDA2My0yLjY3MTg3NC0yLjY3OTY4OC01LjA4NTkzNy00LjYxNzE4OC03LjI4OTA2Mi0xLjkyNTc4MS0yLjIxMDkzOC0zLjkyOTY4OC00LjQxNzk2OS01LjU2MjUtNi44NTE1NjItMS42OTE0MDYtMi4zOTg0MzgtMy4yNS00Ljg5MDYyNi00LjgxNjQwNi03LjM5NDUzMi0xLjU3ODEyNS0yLjUtMy4yMDcwMzItNS4wMDc4MTItNC42NDA2MjUtNy42MTcxODctMy4xMzY3MTktNS4xMjUtNS43ODEyNS0xMC41MjM0MzgtOC42NjAxNTctMTYuMDAzOTA3bC0xLjY0NDUzMS40MTc5NjljLjMwMDc4MSA2LjIwNzAzMSAxLjA3ODEyNSAxMi40NDkyMTkgMi4zODI4MTMgMTguNjA1NDY5LjYyMTA5NCAzLjA4OTg0NCAxLjQ1NzAzMSA2LjEyMTA5NCAyLjI2NTYyNSA5LjE5MTQwNi45NTcwMzEgMyAxLjkyMTg3NSA2LjAyMzQzOCAzLjA0Mjk2OSA4Ljk4NDM3NSAxLjA5NzY1NiAyLjk3NjU2MyAyLjAzOTA2MiA2LjA2MjUgMy4xMjg5MDYgOS4xMDkzNzUgMS4xNDQ1MzEgMy4wMTE3MTkgMi43Njk1MzEgNS43ODEyNSA0Ljk1MzEyNSA4LjE2MDE1Ni45NzY1NjIgMS4wMzkwNjMgMiAyLjA1NDY4OCAzLjA4NTkzNyAzLjAxOTUzMiA1LjI4MTI1IDQuNzAzMTI1IDYuNjkxNDA2IDEyLjQxNDA2MiAzLjgwNDY4OCAxOC44NzEwOTQtMi40ODA0NjkgNS41NDY4NzQtNC45NzI2NTYgMTEuMDg1OTM3LTcuNDEwMTU2IDE2LjY0ODQzNy0zLjEwMTU2MyA3LjA0Mjk2OS01LjgzNTkzOCAxNC4yMTQ4NDQtOC4yODUxNTcgMjEuNDg0Mzc1LS43MTQ4NDMtMi40ODQzNzUtMS41NzgxMjUtNC44MTI1LTIuNTIzNDM3LTcuMDkzNzUtMS4xNjQwNjMtMi42NzE4NzUtMi42Nzk2ODgtNS4wODk4NDQtNC42MTcxODgtNy4yODkwNjItMS45MjU3ODEtMi4yMTA5MzgtMy45Mjk2ODctNC40MTc5NjktNS41NjI1LTYuODUxNTYzLTEuNjkxNDA2LTIuMzk4NDM3LTMuMjUtNC44OTQ1MzEtNC44MTY0MDYtNy4zOTQ1MzEtMS41NzgxMjUtMi41LTMuMjAzMTI1LTUuMDA3ODEzLTQuNjQwNjI1LTcuNjE3MTg4LTMuMTM2NzE5LTUuMTI1LTUuNzgxMjUtMTAuNTIzNDM3LTguNjYwMTU2LTE2LjAwMzkwNmwtMS42NDQ1MzEuNDE3OTY5Yy4zMDA3ODEgNi4yMDcwMzEgMS4wNzgxMjQgMTIuNDQ5MjE5IDIuMzg2NzE4IDE4LjYwMTU2Mi42MjEwOTQgMy4wOTM3NSAxLjQ1MzEyNSA2LjEyNSAyLjI2MTcxOSA5LjE5MTQwNy45NTcwMzEgMyAxLjkyMTg3NSA2LjAyMzQzNyAzLjA0Mjk2OSA4Ljk4ODI4MSAxLjA5NzY1NiAyLjk3NjU2MiAyLjA0Mjk2OCA2LjA1ODU5MyAzLjEyODkwNiA5LjEwNTQ2OSAxLjE0NDUzMSAzLjAxMTcxOCAyLjc3MzQzOCA1Ljc4MTI1IDQuOTUzMTI1IDguMTYwMTU2IDIuMTk5MjE5IDIuMzM5ODQ0IDQuNjMyODEzIDQuNTQyOTY4IDcuNDY0ODQ0IDYuMzU5Mzc1IDMuMjQ2MDkzIDIuMDgyMDMxIDQuODgyODEyIDUuOTEwMTU2IDMuOTcyNjU2IDkuNjYwMTU2LTIuMzU1NDY5IDkuNzAzMTI1LTYuNDcyNjU2IDI3LjI3NzM0NC04LjAxOTUzMSAzNi43NzM0MzctMi4wNTg1OTQgMTMuMjQyMTg4LTMuNjI4OTA2IDI2LjYyODkwNy0zLjQ2ODc1IDQwLjUzOTA2M2wyLjkxMDE1Ni45MjE4NzVjOC4xNjQwNjItMTEuMjE0ODQ0IDE0LjgzOTg0NC0yMi44NzUgMjEuMDMxMjUtMzQuNjc5Njg4IDYuMTU2MjUtMTEuODIwMzEyIDExLjczMDQ2OS0yMy44MDg1OTMgMTYuODEyNS0zNS45NjA5MzcuMDg5ODQ0LS4yMTQ4NDQuMTc5Njg4LS40MjU3ODEuMjY5NTMxLS42NDA2MjUgMS42NDA2MjUtMy45MTc5NjkgNS43MzQzNzUtNi4wMjczNDQgOS45MzM1OTQtNS4zOTQ1MzEgMy4wOTM3NS40NjQ4NDMgNi4xNTYyNS40NjA5MzcgOS4xNDQ1MzEuMjMwNDY5IDMuMjE0ODQ0LS4yODUxNTcgNi4yODUxNTYtMS4yMzA0NjkgOS4xNjAxNTYtMi42ODM1OTQgMi44NTkzNzYtMS41MTU2MjUgNS42MzI4MTMtMy4xNTYyNSA4LjQ1MzEyNi00LjYxMzI4MiAyLjgyODEyNC0xLjQyOTY4NyA1LjU3ODEyNC0zLjAxMTcxOCA4LjMwODU5My00LjU4NTkzNyAyLjY2Nzk2OS0xLjcxODc1IDUuMzI0MjE5LTMuMzk0NTMxIDcuODY3MTg4LTUuMjU3ODEzIDUuMTE3MTg3LTMuNjY0MDYyIDkuOTAyMzQzLTcuNzUgMTQuMzA4NTkzLTEyLjEyODkwNmwtLjkzMzU5My0xLjQxNzk2OGMtNS44MjAzMTMgMi4xMDU0NjgtMTEuNDE0MDYzIDQuMzA4NTkzLTE3LjE4MzU5NCA1Ljk3NjU2Mi0yLjgyMDMxMy45NTcwMzEtNS43MTQ4NDQgMS43MTQ4NDQtOC41NjI1IDIuNDk2MDk0LTIuODQ3NjU2Ljc4OTA2Mi01LjY3OTY4NyAxLjU3ODEyNS04LjU0Njg3NSAyLjIxMDkzNy0yLjg0NzY1Ni42OTUzMTMtNS44MTY0MDYuOTcyNjU3LTguNzI2NTYyIDEuMzA0Njg4LTIuOTE3OTY5LjMyMDMxMi01LjY2NDA2MyAxLjA4MjAzMS04LjMyNDIxOSAyLjI2OTUzMS0yLjg2MzI4MSAxLjMzNTkzOC01LjY3NTc4MSAyLjg0NzY1Ni04LjQ5NjA5NCA0Ljc0NjA5NCAyLjI0NjA5NC02LjUyMzQzOCA0LjI3NzM0NC0xMy4xMTcxODggNi4wOTc2NTYtMTkuNzg5MDYzIDEuNDAyMzQ0LTUuMzQ3NjU2IDMuMzc4OTA3LTEyLjUyNzM0MyA1LjEzMjgxMy0xOC44MjgxMjUgMS44NjMyODEtNi43MDMxMjUgNy43NzczNDQtMTEuNjM2NzE4IDE0LjczMDQ2OC0xMS44NzUgMy4zOTg0MzgtLjExNzE4NyA2Ljc1NzgxMy0uNzM0Mzc1IDkuODYzMjgyLS45NzI2NTYgMy4yMTg3NS0uMjg1MTU2IDYuMjg1MTU2LTEuMjM0Mzc1IDkuMTYwMTU2LTIuNjgzNTk0IDIuODU5Mzc1LTEuNTE5NTMxIDUuNjMyODEyLTMuMTYwMTU2IDguNDUzMTI1LTQuNjE3MTg3IDIuODI0MjE5LTEuNDI5Njg4IDUuNTc4MTI1LTMuMDExNzE5IDguMzA4NTk0LTQuNTgyMDMxIDIuNjY3OTY5LTEuNzE4NzUgNS4zMjQyMTktMy4zOTg0MzggNy44NjcxODctNS4yNjE3MTkgNS4xMTcxODgtMy42NjAxNTcgOS45MDIzNDQtNy43NDYwOTQgMTQuMzA4NTk0LTEyLjEyODkwN2wtLjkzMzU5NC0xLjQxNDA2MmMtNS44MjAzMTIgMi4xMDE1NjItMTEuNDE0MDYyIDQuMzA0Njg4LTE3LjE4NzUgNS45NzY1NjItMi44MjAzMTIuOTU3MDMyLTUuNzEwOTM3IDEuNzEwOTM4LTguNTYyNSAyLjQ5NjA5NC0yLjg0NzY1Ni43ODkwNjMtNS42NzU3ODEgMS41NzgxMjUtOC41NDI5NjggMi4yMTA5MzgtMi44NDc2NTcuNjk1MzEyLTUuODE2NDA3Ljk3MjY1Ni04LjcyNjU2MyAxLjMwNDY4Ny0yLjkxNzk2OS4zMjAzMTMtNS42NjQwNjMgMS4wODIwMzEtOC4zMjQyMTkgMi4yNjk1MzEtNS4wNDI5NjggMi4zNTU0NjktOS45Mzc1IDUuMTk5MjE5LTE0Ljk4NDM3NSA5Ljk4ODI4MiAzLjk0MTQwNy0xMi41MTE3MTkgNy43NzM0MzgtMjUuMDgyMDMyIDExLjkwMjM0NC0zNy41MjM0MzhsLjE1MjM0NC0uNDg4MjgxYzIuMzM5ODQzLTcuNjI1IDguNTgyMDMxLTEzLjYxNzE4NyAxNi40Mjk2ODctMTUuMDM1MTU2IDIuMjE4NzUtLjQwMjM0NCA0LjM2MzI4Mi0xLjAwMzkwNyA2LjQzNzUtMS43MTQ4NDQgMy4wNDI5NjktMS4wODIwMzEgNS43NzM0MzgtMi43NjU2MjUgOC4xOTUzMTMtNC44OTA2MjUgMi4zODY3MTktMi4xODM1OTQgNC42NjQwNjItNC40Njg3NSA3LjAyNzM0My02LjU4MjAzMSAyLjM3ODkwNy0yLjA5Mzc1IDQuNjQ4NDM4LTQuMzE2NDA3IDYuODk4NDM4LTYuNTE5NTMxIDIuMTUyMzQ0LTIuMzMyMDMyIDQuMzA0Njg4LTQuNjIxMDk0IDYuMzAwNzgxLTcuMDYyNSA0LjAzOTA2My00LjgyNDIxOSA3LjY0NDUzMS05Ljk3NjU2MyAxMC44MTY0MDctMTUuMzI0MjE5bC0xLjI1NzgxMy0xLjEzNjcxOWMtNS4xMDkzNzUgMy40OTYwOTQtOS45NzI2NTYgNy4wMjczNDQtMTUuMTQ0NTMxIDEwLjA4OTg0NHptMCAwIiBmaWxsPSJ1cmwoI20pIi8+PC9zdmc+Cg==" /> Elemental<h3>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
       
        <div class="col-md-4 bg-white row justify-content-start p-5">
           
                    <form class="w-100" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                         
                                <input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="email@youremail.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group mt-2">
                            <label for="password" class="">{{ __('Password') }}</label>

                          
                                <input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row px-3 mt-3 justify-content-center">
                           
                                <div class="custom-control custom-checkbox">
                                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>

                                  @if (Route::has('password.request'))
                                    <a class=" p-0 ml-auto mt-1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                        </div>

                        <div class="form-group row mb-0 px-3 mt-3">
                            
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>

                              
                            
                        </div>
                    </form>
           
        </div>
    </div>
</div>
</section>
@endsection