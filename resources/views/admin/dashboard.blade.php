<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White Simple Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-light: #f8fafc;
            --sidebar-white: #ffffff;
            --primary-blue: #6a76d8;
            --danger-red: #ef4444;
            --text-dark: #1e293b;
            --border-color: #e2e8f0;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            font-family: 'Montserrat', sans-serif !important;
            margin: 0;
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            background: var(--sidebar-white);
            position: fixed;
            padding: 30px 20px;
            border-right: 1px solid var(--border-color);
        }

        .nav-link {
            color: #64748b;
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: 0.3s;
            text-decoration: none;
            display: block;
        }

        .nav-link:hover, .nav-link.active {
            background: #f1f5f9;
            color: var(--primary-blue);
        }

        .main-content {
            margin-left: 260px;
            padding: 40px;
        }

        .btn-custom-pill {
            display: inline-flex;
            align-items: center;
            border-radius: 50px;
            padding: 4px 4px 4px 15px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            font-size: 13px;
        }

        .btn-edit {
            background: #f1f5f9;
            color: var(--primary-blue) !important;
        }

        .btn-delete {
            background: #fff1f2;
            color: var(--danger-red) !important;
        }

        .icon-circle {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
        }

        .btn-edit .icon-circle {
             background: rgba(106, 118, 216, 0.1);
         }
        .btn-delete .icon-circle {
             background: rgba(239, 68, 68, 0.1); 
        }
        .table-container {
            background: white;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            margin-top: 30px;
            overflow: hidden;
        }

        table { width: 100%; border-collapse: collapse; }
        th { background: #f8fafc; padding: 15px 20px; color: #64748b; font-size: 12px; text-transform: uppercase; }
        td { padding: 15px 20px; border-top: 1px solid var(--border-color); vertical-align: middle; }

        .modal-content { border-radius: 20px; border: none; padding: 10px; }
        .form-control { border-radius: 10px; padding: 12px; border: 1px solid #e2e8f0; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3 class="mb-5 px-3" style="color: var(--primary-blue); font-weight: 700;">SimpleDash</h3>
        <nav class="nav flex-column">
            <a class="nav-link active" href="#">Dashboard</a>
        </nav>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 style="font-weight: 700;">Leads Overview</h2>
            </div>
        </div>

        <div class="table-container">
            <div class="p-4 border-bottom d-flex justify-content-between">
                <h5 class="m-0">Recent Leads</h5>
                <a href="#" class="btn  btn-white"
                data-bs-toggle="modal"
                data-bs-target="#createLeadModal">
                + Create
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Business</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $lead)
                    <tr>
                        <td><strong>{{ $lead->name }}</strong></td>
                        <td>{{ $lead->business_name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="#" class="btn-custom-pill btn-edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $lead->id }}">
                                    Edit <span class="icon-circle">✎</span>
                                </a>

                                <form action="{{ route('admin.leads.destroy', $lead->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-custom-pill btn-delete" onclick="return confirm('Are you sure?')">
                                        Delete <span class="icon-circle">✕</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="editModal{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title fw-bold">Edit Lead Info</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <form action="{{ route('admin.leads.update', $lead->id) }}"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Full Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name', $lead->name) }}">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Business Name</label>
                                            <input type="text" name="business_name" class="form-control"
                                                value="{{ old('business_name', $lead->business_name) }}">
                                            @error('business_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email', $lead->email) }}">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ old('phone', $lead->phone) }}">
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Attachment</label>
                                            <input type="file" name="attachment" class="form-control">
                                            @error('attachment')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                            @if($lead->attachment)
                                                <small class="text-muted d-block mt-1">
                                                    Current file: {{ $lead->attachment }}
                                                </small>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">Message</label>
                                            <textarea name="message" class="form-control" rows="3">{{ old('message', $lead->message) }}</textarea>
                                            @error('message')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button type="submit"
                                                class="btn w-100 py-3 mt-2"
                                                style="background: var(--primary-blue); color: white; border-radius: 12px; font-weight: 600;">
                                            Update Details
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- CREATE LEAD MODAL -->
<div class="modal fade" id="createLeadModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Create New Lead</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('admin.leads.store') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Business Name</label>
                        <input type="text" name="business_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Attachment</label>
                        <input type="file" name="attachment" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Message</label>
                        <textarea name="message" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit"
                            class="btn w-100 py-3"
                            style="background: var(--primary-blue); color: #fff; border-radius: 12px;">
                        Create Lead
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>