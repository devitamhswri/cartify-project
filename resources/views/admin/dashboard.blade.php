@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; background: #f8f9fa; }
    .sidebar { width: 280px; background: white; height: 100vh; position: fixed; padding: 20px; }
    .logo { display: flex; align-items: center; margin-bottom: 30px; }
    .logo img { width: 150px; }
    .menu-title { color: #adb5bd; font-size: 12px; margin: 20px 0 10px; }
    .menu-item { padding: 12px 15px; margin: 5px 0; border-radius: 8px; cursor: pointer; display: flex; align-items: center; color: #495057; }
    .menu-item:hover, .menu-item.active { background: #e9ecef; }
    .menu-item i { margin-right: 12px; width: 20px; }
    .main-content { margin-left: 280px; padding: 20px; }
    .header { background: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-radius: 8px; }
    .search-box { width: 400px; padding: 10px 15px; border: 1px solid #dee2e6; border-radius: 8px; }
    .user-info { display: flex; align-items: center; gap: 15px; }
    .user-avatar { width: 40px; height: 40px; border-radius: 50%; }
    .stat-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 20px; }
    .stat-card { background: white; padding: 25px; border-radius: 12px; }
    .stat-icon { width: 50px; height: 50px; background: #e7f5ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1c7ed6; margin-bottom: 15px; }
    .stat-label { color: #868e96; font-size: 14px; margin-bottom: 5px; }
    .stat-value { font-size: 32px; font-weight: bold; color: #212529; }
    .chart-card { background: white; padding: 30px; border-radius: 12px; }
    .chart-header { display: flex; justify-content: space-between; margin-bottom: 20px; }
    .revenue-stats { display: flex; gap: 40px; margin-bottom: 30px; }
    .stat-item { display: flex; align-items: center; gap: 10px; }
    .stat-dot { width: 12px; height: 12px; border-radius: 50%; }
    .blue-dot { background: #1c7ed6; }
    .yellow-dot { background: #fab005; }
    .stat-amount { font-size: 24px; font-weight: bold; }
    .stat-change { color: #12b886; font-size: 14px; }
    .chart-bars { display: flex; align-items: flex-end; justify-content: space-between; height: 300px; gap: 15px; }
    .bar-group { display: flex; gap: 5px; flex: 1; align-items: flex-end; }
    .bar { width: 100%; border-radius: 4px 4px 0 0; }
    .blue-bar { background: #1c7ed6; }
    .yellow-bar { background: #fab005; }
    .month-label { text-align: center; color: #868e96; font-size: 12px; margin-top: 10px; }
</style>
@endsection

@section('content')
<div class="sidebar">
    <div class="logo">
        <img src="https://via.placeholder.com/150x40?text=SURFSIDE+MEDIA" alt="Logo">
    </div>
    
    <div class="menu-title">MAIN HOME</div>
    <div class="menu-item active">
        <i class="fas fa-th-large"></i> Dashboard
    </div>
    
    <div class="menu-item">
        <i class="fas fa-shopping-cart"></i> Products <i class="fas fa-chevron-down ms-auto"></i>
    </div>
    <div class="menu-item">
        <i class="fas fa-layer-group"></i> Brand <i class="fas fa-chevron-down ms-auto"></i>
    </div>
    <div class="menu-item">
        <i class="fas fa-layer-group"></i> Category <i class="fas fa-chevron-down ms-auto"></i>
    </div>
    <div class="menu-item">
        <i class="fas fa-file-alt"></i> Order <i class="fas fa-chevron-down ms-auto"></i>
    </div>
    <div class="menu-item">
        <i class="fas fa-images"></i> Slider
    </div>
    <div class="menu-item">
        <i class="fas fa-ticket-alt"></i> Coupns
    </div>
    <div class="menu-item">
        <i class="fas fa-user"></i> User
    </div>
    <div class="menu-item">
        <i class="fas fa-cog"></i> Settings
    </div>
</div>

<div class="main-content">
    <div class="header">
        <input type="text" class="search-box" placeholder="Search here...">
        <div class="user-info">
            <i class="fas fa-search"></i>
            <i class="fas fa-bell position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">1</span>
            </i>
            <img src="https://via.placeholder.com/40" alt="User" class="user-avatar">
            <div>
                <div style="font-weight: 600;">Kristin Watson</div>
                <div style="font-size: 12px; color: #868e96;">Admin</div>
            </div>
        </div>
    </div>

    <div class="stat-cards">
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
            <div class="stat-label">Total Orders</div>
            <div class="stat-value">{{ $total_orders }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
            <div class="stat-label">Delivered Orders</div>
            <div class="stat-value">{{ $delivered_orders }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="stat-label">Total Amount</div>
            <div class="stat-value">{{ number_format($total_amount, 2) }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="stat-label">Delivered Orders Amount</div>
            <div class="stat-value">0.00</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
            <div class="stat-label">Pending Orders</div>
            <div class="stat-value">{{ $pending_orders }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
            <div class="stat-label">Canceled Orders</div>
            <div class="stat-value">0</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="stat-label">Pending Orders Amount</div>
            <div class="stat-value">{{ number_format($total_amount, 2) }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon"><i class="fas fa-dollar-sign"></i></div>
            <div class="stat-label">Canceled Orders Amount</div>
            <div class="stat-value">0.00</div>
        </div>
    </div>

    <div class="chart-card">
        <div class="chart-header">
            <h4>Earnings revenue</h4>
            <i class="fas fa-ellipsis-h"></i>
        </div>
        <div class="revenue-stats">
            <div class="stat-item">
                <span class="stat-dot blue-dot"></span>
                <div>
                    <div style="font-size: 12px; color: #868e96;">Revenue</div>
                    <div class="stat-amount">${{ number_format($revenue) }}</div>
                    <span class="stat-change"><i class="fas fa-arrow-up"></i> 0.56%</span>
                </div>
            </div>
            <div class="stat-item">
                <span class="stat-dot yellow-dot"></span>
                <div>
                    <div style="font-size: 12px; color: #868e96;">Order</div>
                    <div class="stat-amount">${{ number_format($order_value) }}</div>
                    <span class="stat-change"><i class="fas fa-arrow-up"></i> 0.56%</span>
                </div>
            </div>
        </div>
        <div class="chart-bars">
            @foreach(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] as $month)
            <div style="flex: 1;">
                <div class="bar-group">
                    <div class="bar blue-bar" style="height: {{ $month == 'Jul' ? '100%' : ($month == 'Aug' ? '75%' : '0%') }}"></div>
                    <div class="bar yellow-bar" style="height: {{ $month == 'Jul' ? '85%' : ($month == 'Aug' ? '60%' : '0%') }}"></div>
                </div>
                <div class="month-label">{{ $month }}</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection