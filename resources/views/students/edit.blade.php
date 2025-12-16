@extends('layouts.app')

@section('title', __('messages.edit_student'))

@section('content')
<div class="page-header">
    <h2><i class="fas fa-edit"></i> {{ __('messages.edit_student') }}</h2>
    <a href="{{ route('students.index') }}" class="btn-secondary">
        <i class="fas fa-arrow-left"></i> {{ __('messages.cancel') }}
    </a>
</div>

<div class="form-container">
    <form method="POST" action="{{ route('students.update', $student) }}" class="student-form">
        @csrf
        @method('PUT')
        
        <div class="form-row">
            <div class="form-group">
                <label for="first_name">{{ __('messages.first_name') }} *</label>
                <input type="text" 
                       id="first_name" 
                       name="first_name" 
                       value="{{ old('first_name', $student->first_name) }}"
                       required 
                       maxlength="50">
                @error('first_name')
                    <span class="error-message" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="last_name">{{ __('messages.last_name') }} *</label>
                <input type="text" 
                       id="last_name" 
                       name="last_name" 
                       value="{{ old('last_name', $student->last_name) }}"
                       required 
                       maxlength="50">
                @error('last_name')
                    <span class="error-message" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="email">{{ __('messages.email') }} *</label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       value="{{ old('email', $student->email) }}"
                       required 
                       maxlength="100">
                @error('email')
                    <span class="error-message" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="phone">{{ __('messages.phone') }}</label>
                <input type="tel" 
                       id="phone" 
                       name="phone" 
                       value="{{ old('phone', $student->phone) }}"
                       maxlength="20">
                @error('phone')
                    <span class="error-message" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="birth_date">{{ __('messages.birth_date') }}</label>
            <input type="date" 
                   id="birth_date" 
                   name="birth_date"
                   value="{{ old('birth_date', $student->birth_date ? $student->birth_date->format('Y-m-d') : '') }}">
            @error('birth_date')
                <span class="error-message" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="address">{{ __('messages.address') }}</label>
            <textarea id="address" 
                      name="address" 
                      rows="3" 
                      maxlength="500">{{ old('address', $student->address) }}</textarea>
            @error('address')
                <span class="error-message" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn-primary">
                <i class="fas fa-save"></i> {{ __('messages.save') }}
            </button>
            <a href="{{ route('students.index') }}" class="btn-secondary">
                <i class="fas fa-times"></i> {{ __('messages.cancel') }}
            </a>
        </div>
    </form>
</div>
@endsection